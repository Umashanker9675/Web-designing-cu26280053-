<VirtualHost *:80>
    ServerName labsheet4.local
    DocumentRoot "C:/xampp/htdocs/labsheet4"
    <Directory "C:/xampp/htdocs/labsheet4">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>