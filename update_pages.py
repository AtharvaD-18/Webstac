import os
import glob

# Configuration for pages and their respective background images
pages_config = {
    'about.php': 'https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&w=1920&q=80',
    'BBSSoft.php': 'https://images.unsplash.com/photo-1541888081295-81676df6c944?auto=format&fit=crop&w=1920&q=80',
    'compliancetracking.php': 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1920&q=80',
    'incidentmanagement.php': 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1920&q=80',
    'sense.php': 'https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&w=1920&q=80',
    'hseaudit.php': 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=1920&q=80',
    'legalassessment.php': 'https://images.unsplash.com/photo-1505664173691-a021da3b2b48?auto=format&fit=crop&w=1920&q=80',
    'Responsiblecareglimpses.php': 'https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?auto=format&fit=crop&w=1920&q=80',
    'responsiblecare.php': 'https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?auto=format&fit=crop&w=1920&q=80',
    'testimonial.php': 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=1920&q=80',
    'contactus.php': 'https://images.unsplash.com/photo-1516387938699-a93567ec168e?auto=format&fit=crop&w=1920&q=80',
}

base_dir = r"c:\Users\DELL\Downloads\Website-main\webstacdemo"

for filename, img_url in pages_config.items():
    filepath = os.path.join(base_dir, filename)
    if not os.path.exists(filepath):
        print(f"File not found: {filename}")
        continue
        
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
        
    # Check if already modified
    if 'blue-contact-banner-container' in content:
        print(f"Already modified: {filename}")
        continue

    # Find the page-title-container start
    target_start = '<div class="page-title-container page-title-container-breadcrumbs page-title-left"'
    
    if target_start not in content:
        target_start = '<div class="page-title-container'
        
    if target_start in content:
        # We need to replace `<div class="page-title-container ...">` with `<div class="..." style="background-image: ...;">`
        # And inject the blue-contact-banner-container right after the closing </div> of page-title-container
        
        # Let's find the position
        start_idx = content.find(target_start)
        
        # Add style to the container
        end_of_tag = content.find('>', start_idx)
        tag_content = content[start_idx:end_of_tag]
        
        if 'style=' in tag_content:
            new_tag = tag_content + f' background-image: url(\'{img_url}\');'
        else:
            new_tag = tag_content + f' style="background-image: url(\'{img_url}\');"'
            
        content = content[:start_idx] + new_tag + content[end_of_tag:]
        
        # Now find the closing </div> of page-title-container
        # It's usually exactly 3 `</div>` tags down.
        # But we can just search for `<div class='clearfix'` or `<div class="clearfix"` which usually follows it.
        
        # Alternative: look for the end of the breadcrumbs and the next `</div></div>`
        breadcrumbs_idx = content.find('</ul>', start_idx)
        if breadcrumbs_idx != -1:
            end_container_idx = content.find('</div>\n\t</div>', breadcrumbs_idx)
            if end_container_idx == -1:
                end_container_idx = content.find('</div></div>', breadcrumbs_idx)
                
            if end_container_idx != -1:
                # Add the closing div lengths
                if '</div>\n\t</div>' in content[end_container_idx:end_container_idx+20]:
                    insert_pos = end_container_idx + len('</div>\n\t</div>')
                else:
                    insert_pos = end_container_idx + len('</div></div>')
                
                banner_html = """
    <div class="blue-contact-banner-container">
        <div class="blue-contact-banner">
            <h4>FOR MORE INFORMATION GET IN TOUCH WITH US</h4>
            <a href="contactus.php" class="btn-orange">Quick Enquiry</a>
        </div>
    </div>
"""
                content = content[:insert_pos] + banner_html + content[insert_pos:]
                
                with open(filepath, 'w', encoding='utf-8') as f:
                    f.write(content)
                print(f"Updated: {filename}")
            else:
                print(f"Could not find end of container in {filename}")
        else:
            print(f"Could not find breadcrumbs in {filename}")
    else:
        print(f"Could not find page-title-container in {filename}")
