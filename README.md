# Fine Art Meme Maker

Welcome to the Fine Art Meme Maker project! This application allows users to create memes using famous paintings as backgrounds.

Table of Contents

        Overview
        Features
        Installation
        Usage
        File Structure
        Data
        Tools and Frameworks
        WAMP Server
        License
        
Overview
The Fine Art Meme Maker project enables users to select a base painting from a collection of famous artworks and overlay text to create humorous or creative memes. Users can customize the text, font size, and image width before generating their meme.

Features

Dynamic Painting Selection:
Choose from a curated list of famous paintings by renowned artists.
Thumbnails of selected paintings dynamically update based on user interactions.

Customizable Memes:
Input text fields for two meme captions with adjustable font sizes.
Slider controls for adjusting the image width to suit different display preferences.

Interactive User Interface:
Intuitive user interface with real-time preview of meme compositions.
Easy submission mechanism to generate memes based on user configurations.

Installation
To run the Fine Art Meme Maker locally using WAMP Server, follow these steps:

Prerequisites
WAMP Server installed and configured on your system.
Ensure PHP is installed and configured properly in your WAMP environment.

Installation Steps
Clone the repository:

        bash
        git clone https://github.com/your/repository.git
        cd repository-folder
        
Place the project files in your WAMP Server's www directory:

makefile
C:\wamp\www\fine-art-meme-maker\
Start WAMP Server and ensure it's running correctly.

Access the application via your web browser:

        arduino
        http://localhost/fine-art-meme-maker/index.html
        
Usage

Select a Painting:
Choose a base painting from the dropdown menu.

Customize Meme Text:
Enter text for two meme captions.
Adjust font sizes using the range sliders.

Adjust Image Width:
Use the image width slider to set the desired size for your meme.

Generate Meme:
Click "Click To See Meme" to preview your meme creation.

File Structure
graphql
Copy code
fine-art-meme-maker/

        │
        ├── index.html               # Main HTML page with meme creation form
        ├── ch12-proj3-result.php    # PHP script to process meme creation
        ├── css/
        │   └── ch12-proj3.css       # CSS file for styling
        │
        ├── js/
        │   └── ch12-proj3.js        # JavaScript file for client-side functionality
        │
        ├── data.inc.php             # PHP file containing paintings data array
        │
        └── README.md                # This README file

Data
The data.inc.php file contains an array of paintings used in the application. Each painting entry includes title, artist, and filename.

        php
        <?php 
        $paintings = [
           [ "title"=>"Woman with a Parasol", "artist"=>"Claude Monet", "filename"=>"017040" ],
           [ "title"=>"Portrait of a young women", "artist"=>"Therese Schwartze", "filename"=>"130010" ],
           [ "title"=>"Three girls from Amsterdam Orphanage", "artist"=>"Therese Schwartze", "filename"=>"130020" ],
           [ "title"=>"The Bridge at Argenteuile", "artist"=>"Claude Monet", "filename"=>"017080" ],
           [ "title"=>"Self Portrait", "artist"=>"Vincent Van Gogh", "filename"=>"019170" ],
           [ "title"=>"Madame Bergeret", "artist"=>"Francois Boucher", "filename"=>"107030" ],
           [ "title"=>"Interior with Women beside a Linen Cupboard", "artist"=>"Pieter de Hooch", "filename"=>"126020" ],
           [ "title"=>"The Merry Family", "artist"=>"Jan Steen", "filename"=>"124020" ],
           [ "title"=>"Self Portrait", "artist"=>"Judith Leyster", "filename"=>"112020" ],
           [ "title"=>"Portrait of Feyntje van Steenkiste", "artist"=>"Frans Hals", "filename"=>"123020" ]   
        ];
        ?>

Tools and Frameworks
Tools Used
WAMP Server: Used to host the application locally during development.
PHP: Used for server-side scripting and dynamic content generation.
HTML/CSS/JavaScript: Standard web technologies for frontend development and user interaction.
Git: Version control system for collaborative development and managing code changes.

Frameworks
None: This project does not utilize any specific frontend or backend frameworks.
License
This project is licensed under the MIT License.
