import os
import glob

files = glob.glob('*.php')

for file in files:
    with open(file, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
    
    modified = False
    
    if '<div  style="float:left; width:60%">' in content:
        content = content.replace('<div  style="float:left; width:60%">', '<div class="modern-card" style="float:left; width:60%; box-sizing: border-box;">')
        modified = True
        
    if '<div  style=" width:100%">' in content:
        content = content.replace('<div  style=" width:100%">', '<div class="modern-card" style="width:100%; box-sizing: border-box;">')
        modified = True
        
    if '<div style="width:100%">' in content:
        content = content.replace('<div style="width:100%">', '<div class="modern-card" style="width:100%; box-sizing: border-box;">')
        modified = True

    if modified:
        with open(file, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f'Updated {file}')
