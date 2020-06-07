<?php



  $categorias = [];
  $categorias[] = 'infantil';
  $categorias[] = 'adolescente';
  $categorias[] = 'adulto';
  $categorias[] = 'idoso';
  


  $nome = $_POST['nome'];
  $idade = $_POST['idade'];

  


 


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