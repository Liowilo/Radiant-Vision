# -*- coding: utf-8 -*-
"""
Created on Mon Apr 15 17:33:54 2024

@author: jmame
"""


import pandas as pd

#Carga de datos
df=pd.read_csv("D:/AppsWeb/Radiant-Vision/eclipsa/statsPlayersDemo.csv", encoding='utf-16')
df.drop(['id'], axis=1, inplace=True)