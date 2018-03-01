#!/bin/bash
echo ""
echo "Pré-instalação do LíderCRM - Execute antes do configurador Web."
read -p "Digite o nome da instância a ser atualizada: " instancia

echo "........................................"
echo "....................................."
echo ".................................."
echo "..............................."
echo "............................"
echo "Atualizando arquivos de configuração..."
echo "............................"
yes | cp -fv install/language/en_us.lang.php /var/www/html/$instancia/install/language/

echo "........................................"
echo "....................................."
echo ".................................."
echo "..............................."
echo "............................"
echo "Aplicando permissionamento..."
echo "............................"
chown -R apache:webserver /var/www/html/$instancia
chmod -R 755 /var/www/html/$instancia
cd /var/www/html/$instancia
chmod -R 775 cache/ custom/ modules/ themes/ data/ upload/ config_override.php

echo "........................................"
echo "....................................."
echo ".................................."
echo "..............................."
echo "............................"
echo "Pré-instalação completa! Agora execute o instalador Web..."

