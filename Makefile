# generate CSS from SASS preprocesor
generate-css:
    sass sass/style.scss:www/css/style.css --watch --style compressed
