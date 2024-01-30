# chemical-control
 Crud made with PHP and MySQL database with control of all chemicals automatically notifying expiration date via email highlighted in red on the crud.
 
 - index.php page where explains the precautions with chemical products for employees with menus for system actions.
 - conexao.php where you connect to the database through the pdo method.
 - baixar.php This file takes all records from the database table and converts it to Excel without any library.
 - cadastro.php front-end where the data will be sent to the insert.php file.
 - insert.php file that takes data from cadastro.php and sends it to the database using the pdo method with sql injection protection.
 - consulta.php where it shows all the data registered in the database and with this two buttons for editing and deleting.
 - editar-consulta.php get all the data coming from the edit button id and show the user which data he wants to edit, this way it goes to the edit-up-consulta.php file that will execute the action.
 - limpar.php coming from the delete button, taking the id, it will execute the deletion that the user defines.
 - pdf.php takes all the data from the database forming a table and converts it to PDF using the dompdf library.
 - teste_email.php through the phpmailer library it will send an email according to the condition coming from the database the condition is when today is greater than the due date which in this case is date_2



 
