# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""

from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
import time
import re

##OBTENER HTML DEL PERFIL DEL JUGADOR

driver = webdriver.Chrome()
driver.set_page_load_timeout(12)
driver.get("https://tracker.gg/valorant/profile/riot/CDCGatoEstirado%23NR23/overview")
html = driver.page_source

##Extraer Estadisticas

patron = r'<span class="value" data-v-01072c71="">([+-]?([0-9]*[.])?[0-9]+%?)</span>'
item_names = re.findall(patron, str(html))

















