<?php



  $categorias = [];
  $categorias[] = 'infantil';
  $categorias[] = 'adolescente';
  $categorias[] = 'adulto';
  $categorias[] = 'idoso';
  


  $nome = $_POST['nome'];
  $idade = $_POST['idade'];

  if(empty($nome)){
      echo 'O nome não pode ser vazio';
      return; 
  }

  if(strlen($nome) < 3){
    echo 'o nome teve ter mais de 3 caracteres';
    return;   
  }

  if(strlen($nome) > 50 ){
    echo 'o nome deve conter menos de 50 caracteres';
    return;
  }

  if(!is_numeric($idade)){
    echo 'Informe sua Idade';
    return;
  }

  
  if($idade >= 6 && $idade <=12)
  {
     for($i = 0; $i <= count($categorias); $i++)
     {
      if($categorias[$i] == 'infantil')
        echo "O Nadador ".$nome. "compete na categoria".$categoria[$i];

     }

  }

  else if ($idade >= 13 && $idade <=18)
  {
    for($i = 0; $i <= count($categorias); $i++)
    {
      if($categorias[$i] == 'adolescente')
        echo "O Nadador ".$nome. " Compete na Categoria Adolescente";
    }
  }
  else
  {

    for($i = 0; $i <= count($categorias); $i++)
    {
      if($categorias[$i] == 'adulto')
        echo  "O Nadador ".$nome. " Compete na Categoria Adulto";
    }
    
  }
?>