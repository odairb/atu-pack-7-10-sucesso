#!/bin/bash
echo ""
echo "Pack de atualização LíderCRM v3.0"
read -p "Digite o nome da instância a ser atualizada: " instancia

echo "........................................"
echo "....................................."
echo ".................................."
echo "..............................."
echo "............................"
echo "Aplicando correções no código..."
echo "............................"
find /home/sucesso/public_html/$instancia/modules/Users/metadata/* -exec sed -i 's/imageName=Users.gif"/imageName=Users.gif/Ig' {} \;

echo "........................................"
echo "....................................."
echo ".................................."
echo "..............................."
echo "............................"
echo "Atualizando arquivos de configuração..."
echo "............................"
yes | cp -rfv * /home/sucesso/public_html/$instancia

echo "........................................"
echo "....................................."
echo ".................................."
echo "..............................."
echo "............................"
echo "Removendo arquivos do tema original..."
echo "............................"
rm -f /home/sucesso/public_html/$instancia/themes/SuiteP/imagens/p_login_logo.svg
rm -f /home/sucesso/public_html/$instancia/themes/SuiteP/imagens/p_icon_caret.svg
rm -f /home/sucesso/public_html/$instancia/themes/SuiteP/imagens/p_icon_home_hover.svg
rm -f /home/sucesso/public_html/$instancia/themes/SuiteP/images/forms/src/check.svg
rm -f /home/sucesso/public_html/$instancia/themes/SuiteP/images/forms/src/radio.svg
rm -f /home/sucesso/public_html/$instancia/themes/SuiteP/images/forms/src/select.svg


echo "........................................"
echo "....................................."
echo ".................................."
echo "..............................."
echo "............................"
echo "Aplicando permissionamento..."
echo "............................"
#chown -R apache:apache /home/sucesso/public_html/$instancia
chmod -R 755 /home/sucesso/public_html/$instancia
cd /home/sucesso/public_html/$instancia
chmod -R 775 cache/ custom/ modules/ themes/ data/ upload/ config_override.php
rm -Rfv atualizar_liderCRMv3_CR_7_10.sh pre-install_sucesso.sh 
rm -Rfv themes/SuiteP/images/p_login_logo.svg
echo "........................................"
echo "....................................."
echo ".................................."
echo "..............................."
echo "............................"
echo "Atualização completa!"

