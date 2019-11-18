<?php
   $orcamento=1000;
   
   if( $orcamento >= 10000  ) {
       echo "João e Maria possui orçamento para viajar, pois o seu orçamento é de: ".$orcamento;
   }
   elseif($orcamento >= 500)
   {
       echo "João e Maria irão optar por uma viajem nacional, seu orçamento é de: ".$orcamento;
   }
   else 
   {
       echo "Não vão viajar :( ";
   }
   