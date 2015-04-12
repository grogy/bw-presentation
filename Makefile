# generate CSS from SASS preprocesor
generate-css:
    sass sass/style.scss:www/css/style.css --watch --style compressed


# install development dependencies
install-dependencies:
	composer create-project apigen/apigen dev-dependencies/apigen v4.0.0


# generate documentation
generate-documentation:
	rm -rf doc/
	dev-dependencies/apigen/bin/apigen generate \
		--source app/ --destination doc/ \
		--tree --todo --deprecated
