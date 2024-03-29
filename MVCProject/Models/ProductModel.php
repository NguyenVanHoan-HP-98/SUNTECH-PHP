<h1>Produc Model Name</h1>

<?php
// Kế thừa từ BaseModel nên khi 1 đối tượng có kiểu Produc được khởi tạo nó sẽ chạy hàm khởi dưng
// của cha nó

    class ProductModel extends BaseModel{

        const TABLE = 'product';

        public function getAll($select = ['*'], $oderby = [])
        {
           return $this->All(self::TABLE , $select , $oderby);
        }
        public function findById($id)
        {
           //die(__METHOD__);

        }

        public function store($data = []){

            return $this -> create(self::TABLE,$data);
        }
        
        public function updateData($id,$data = [])
        {
          return $this -> update(self::TABLE, $id ,$data);
        }

        public function destroy($id)
        {
           $this->delete(self::TABLE, $id);
        }
    }


?>