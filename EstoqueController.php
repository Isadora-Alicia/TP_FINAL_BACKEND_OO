<?php
    require_once 'Estoque.php';

    class EstoqueController {
        private $estoqueModel;
        
        public function __construct(Estoque $estoqueModel) {
            $this->estoqueModel = $estoqueModel;
        }
        
        public function ListarEstoque() {
            return $this->estoqueModel->getAllEstoques();
        }
        
       
        
  
    }
?>
