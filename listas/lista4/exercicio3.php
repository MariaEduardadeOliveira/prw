<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <h1>Lista 4 - 30/03/2022</h1>
    <p><strong>Exercício 4</strong></p>
    <?php
    $est = $_POST['est'];

    switch ($est) {
        case 'Acre':
            echo "Sua capital é a cidade de Rio Branco.";
            break;
        case 'Alagoas':
            echo "Sua capital é a cidade de Maceió.";
            break;
        case 'Amapá':
            echo "Sua capital é a cidade de Macapá.";
            break;
        case 'Amazonas':
            echo "Sua capital é a cidade de Mauanus.";
            break;
        case 'Bahia':
            echo "Sua capital é a cidade de Salvador.";
            break;
        case 'Ceará':
            echo "Sua capital é a cidade de Fortaleza.";
            break;
        case 'Espírito Santo':
            echo "Sua capital é a cidade de Vitória.";
            break;
        case 'Goiás':
            echo "Sua capital é a cidade de Goiânia.";
            break;
        case 'Maranhão':
            echo "Sua capital é a cidade de São Luiz.";
            break;  
        case 'Mato Grosso':
            echo "Sua capital é a cidade de Cuiabá.";
            break;  
        case 'Mato Grosso do Sul':
            echo "Sua capital é a cidade de Campo Grande.";
            break;  
        case 'Minas Gerais':
            echo "Sua capital é a cidade de Belo Horizonte.";
            break;  
        case 'Pará':
            echo "Sua capital é a cidade de Belém.";
            break;
        case 'Paraíba':
            echo "Sua capital é a cidade de João Pessoa.";
            break;
        case 'Paraná':
            echo "Sua capital é a cidade de Curitiba.";
            break;
        case 'Pernanbuco':
            echo "Sua capital é a cidade de Recife.";
            break;
        case 'Piauí':
            echo "Sua capital é a cidade de Teresina.";
            break;
        case 'Rio de Janeiro':
            echo "Sua capital é a cidade de Rio de Janeiro.";
            break;
        case 'Rio Grande do Norte':
            echo "Sua capital é a cidade de Natal.";
            break;
        case 'Rio Grande do Sul':
            echo "Sua capital é a cidade de Porto Alegre.";
            break;
        case 'Rondônia':
            echo "Sua capital é a cidade de Porto Velho.";
            break;  
        case 'Roraima':
            echo "Sua capital é a cidade de Boa Vista.";
            break;  
        case 'Santa Catarina':
            echo "Sua capital é a cidade de Florianópolis.";
            break;  
        case 'São Paulo':
            echo "Sua capital é a cidade de São Paulo.";
            break;
        case 'Sergipe':
            echo "Sua capital é a cidade de Aracaju.";
            break;
        case 'Tocantins':
            echo "Sua capital é a cidade de Palmas.";
            break;
        case 'Distrito Federal':
            echo "Sua capital é a cidade de Brasília.";
            break;
        default:
            echo "Houve um erro de digitação.";
        }
	?>
</body>
</html>