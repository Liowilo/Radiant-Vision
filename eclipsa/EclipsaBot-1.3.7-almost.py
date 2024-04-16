# -*- coding: utf-8 -*-
"""
Created on Mon Apr 15 17:23:22 2024

@author: jmame
"""

import requests
from bs4 import BeautifulSoup as bs
import random
import time
import pandas as pd
import numpy as np
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.options import Options
import undetected_chromedriver as uc

#Carga de datos
df=pd.read_csv("D:/AppsWeb/Radiant-Vision/profileLinksDemo2.csv")
df.drop(['id'], axis=1, inplace=True)

index=0
link = df['link'][index]
##print(link)

def parsearPerfiles(link):
    
    ##Busqueda del perfil    
    options = Options()
    options.page_load_strategy = 'normal'
    browser = webdriver.Chrome(options=options)
    browser.set_page_load_timeout(30)
    url = link
    print("Profile: " + link)
    try:
       browser.get(url)   
       
    except:
        pass
    
    
    #Obtencion y reacomodo del HTML    
    html = browser.page_source
    #print(html)   ###----Imprimir HTML sin acomodar
    soup = bs(html, 'lxml')
    soup           ###----Imrimir HTML acomodado
    
    ##Cerrar pestaña y navegador
    browser.close()
    browser.quit()
    
    ##Extraccion de datos de IDENTIFICACION

    nickname = soup.find('span', {'class':'trn-ign__username'}).text.strip()
    nickname
    tag = soup.find('span', {'class':'trn-ign__discriminator'}).text.strip()
    tag
    
    ##Extraccion de datos de Elo y Winrate
    
    rankList = soup.find_all('div',{'class':'rating-entry'})
    rankList

    if rankList:
        currentRank = rankList[0].find('div', {'class':'value'}).text
        peakRank = rankList[1].find('div', {'class':'value'}).text
    else:
       print("La lista de stats esta vacia")
       


    #lista de Matches
    matchesList = soup.find_all('text', {'fill':'#fff'})
    ##matchesList       ##--------Imprimir la lista

    numberWins = matchesList[0].text
    numberWins

    numberLose = matchesList[1].text
    numberLose
    
    ##Lista de estadisticas generales

    statList  = soup.find_all('div',{'class':'numbers'})
    ##statList     ###----- Imprimir la lista

    #Extraccion de Stats de Combate
    if statList:
        winrate = statList[3].find('span', {'class':'value'}).text[:-1]        
        avgCS = statList[10].find('span', {'class':'value'}).text
        kdaRatio = statList[11].find('span', {'class':'value'}).text
        killsPerRound = statList[12].find('span', {'class':'value'}).text
        avgDmgRound = statList[0].find('span', {'class':'value'}).text
        kills = statList[7].find('span', {'class':'value'}).text
        deadths = statList[8].find('span', {'class':'value'}).text
        assist = statList[9].find('span', {'class':'value'}).text

    else:
        print("La lista de stats esta vacia")
        

    #Lista de Accuracy

    accuracyList = soup.find_all('td',{'class':'stat'})
    accuracyList ##----- Imprimir la lista

    if accuracyList:
        ##Extraccion de datos de Precision
        headPercent =accuracyList[0].find('span',{'class':'stat__value'}).text[:-1]
        headPercent
        boddyPercent = accuracyList[2].find('span', {'class':'stat__value'}).text[:-1]
        boddyPercent
        legsPercent = accuracyList[4].find('span', {'class':'stat__value'}).text[:-1]
        legsPercent
    else:
        print("La lista accuracyList está vacía. No se pueden extraer los datos de precisión.")
        
        
    ##LLENADO DE DATAFRAME
    
    player = pd.DataFrame([{'riotID':nickname, 'tag':tag, 'currentRank':currentRank, 'peakRank':peakRank, 'numWins':numberWins, 
               'numLose':numberLose, 'winrate':winrate, 'avgCS':avgCS, 'KDArat':kdaRatio, 'kpr':killsPerRound, 
               'avgDmgRound':avgDmgRound, 'kills':kills, 'deaths':deadths, 'assist':assist, 
               'headPercent':headPercent, 'boddyPercent':boddyPercent, 'legsPercent':legsPercent}])
    
    df_statsDemo = pd.DataFrame(player)
    return (df_statsDemo)

##Repertir busqueda con otro perfil
df_statsDemo_list = []  # Lista para almacenar los DataFrames individuales

if not df.empty:
    for i in range(len(df)):
        df_statsDemo_list.append(parsearPerfiles(df['link'][i]))
        time.sleep(random.randint(4, 8))
else:
    print("El DataFrame df está vacío. No hay datos para procesar.")

# Concatenar todos los DataFrames de la lista en uno solo
df_statsDemo = pd.concat(df_statsDemo_list, ignore_index=True)

##Resetear indice y guardar datos en CSV
df_statsDemo.to_csv("statsPlayersDemo.csv", index = False, sep = ';', encoding = 'utf-16')
        
        

        