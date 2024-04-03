# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""

from selenium import webdriver

PATH = "D:/AppsWeb/Radiant-Vision/eclipsa/chromedriver.exe"

driver = webdriver.Chrome(executable_path=PATH)

driver.get("https://tracker.gg/valorant")
