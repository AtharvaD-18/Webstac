import os
import glob
import re

base_dir = r"c:\Users\DELL\Downloads\Website-main\webstacdemo"
php_files = glob.glob(os.path.join(base_dir, "*.php"))

new_top_bar_html = """<div class="top-contact-bar" style="background-color: #013953; color: white; padding: 8px 0; font-size: 14px; border-bottom: 1px solid rgba(255,255,255,0.1);">
    <div style="display: flex; justify-content: flex-end; align-items: center; padding: 0 50px;">
        <div style="margin-right: 25px; display: flex; align-items: center; font-family: 'Inter', sans-serif; font-weight: 500;">
            <i class="fa fa-phone" style="color: #0aafd8; margin-right: 8px;"></i>
            <a href="tel:+918108664360" style="color: white; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#0aafd8'" onmouseout="this.style.color='white'">+91 81086 64360</a>
        </div>
        <div style="display: flex; align-items: center; font-family: 'Inter', sans-serif; font-weight: 500;">
            <i class="fa fa-envelope" style="color: #0aafd8; margin-right: 8px;"></i>
            <a href="mailto:contact@webstac.in" style="color: white; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#0aafd8'" onmouseout="this.style.color='white'">contact@webstac.in</a>
        </div>
    </div>
</div>"""

for filepath in php_files:
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
        
    if 'top-contact-bar' in content:
        # Use regex to find and replace the top-contact-bar block
        # It starts with <div class="top-contact-bar" and ends with </div>\n</div>\n</div> (3 closing divs)
        pattern = r'<div class="top-contact-bar".*?</div>\s*</div>\s*</div>'
        new_content = re.sub(pattern, new_top_bar_html, content, flags=re.DOTALL)
        
        if new_content != content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Updated: {os.path.basename(filepath)}")
        else:
            print(f"Could not replace in {os.path.basename(filepath)}")
