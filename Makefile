development:
	bundle install
	bourbon install --path ./sass
	cd sass && neat install
	bitters install --path ./sass
	css
css:
	sass --watch sass/app.scss:public/css/app.css --style compressed
serve:
	php -S localhost:8000