import os
import glob

base_dir = r"c:\Users\DELL\Downloads\Website-main\webstacdemo"
php_files = glob.glob(os.path.join(base_dir, "*.php"))

top_bar_html = """
<div class="top-contact-bar" style="background-color: #013953; color: white; padding: 8px 0; font-size: 14px; border-bottom: 1px solid rgba(255,255,255,0.1);">
    <div class="avada-row" style="display: flex; justify-content: flex-end; align-items: center; max-width: 1200px; margin: 0 auto; padding: 0 15px;">
        <div style="margin-right: 25px; display: flex; align-items: center; font-family: 'Inter', sans-serif; font-weight: 500;">
            <i class="fa fa-phone" style="color: #0aafd8; margin-right: 8px;"></i>
            <a href="tel:+918108664360" style="color: white; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#0aafd8'" onmouseout="this.style.color='white'">+91 81086 64360</a>
        </div>
        <div style="display: flex; align-items: center; font-family: 'Inter', sans-serif; font-weight: 500;">
            <i class="fa fa-envelope" style="color: #0aafd8; margin-right: 8px;"></i>
            <a href="mailto:contact@webstac.in" style="color: white; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#0aafd8'" onmouseout="this.style.color='white'">contact@webstac.in</a>
        </div>
    </div>
</div>
"""

for filepath in php_files:
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
        
    if 'top-contact-bar' in content:
        print(f"Already added to: {os.path.basename(filepath)}")
        continue
        
    target_start = '<header id="header">'
    
    if target_start in content:
        content = content.replace(target_start, top_bar_html + "\n" + target_start)
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated: {os.path.basename(filepath)}")
    else:
        print(f"Could not find <header id=\"header\"> in {os.path.basename(filepath)}")
