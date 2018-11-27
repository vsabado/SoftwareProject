FROM nginx
COPY peershare /usr/share/nginx/html
COPY nginx/nginx.conf /etc/nginx/nginx.conf
