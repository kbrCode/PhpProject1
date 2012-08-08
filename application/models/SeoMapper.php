<?php

class Application_Model_SeoMapper
{
   protected $_dbTable;
 
    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }
 
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Seo');
        }
        return $this->_dbTable;
    }
    
    public function save(Application_Model_Seo $seo)
    {
        if($this->findBYObj($seo))
        {
            throw new Exception('Taki seo już istnieje');
        }
        $data = array(
            'jezyk_kod' => $seo->getJezyk_kod(),
            'seourl'    => $seo->getSeourl(),
            'zendurl'   => $seo->getZendurl(),
            'anchor'    => $seo->getAnchor(),
            'aktywny'   => $seo->getAktywny(),
            'router'    => $seo->getRouter(),
            'label'     => $seo->getLabel(),
        );
 
        if (null === ($id = $seo->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }
    
    public function delete($id){
        $where = $this->getDbTable()->getAdapter()->quoteInto('id = ?', $id);
        $result = $this->getDbTable()->delete($where);
        if (0 == count($result)) {
            throw new Exception('Nie znaleziono id ', $id);
            return;
        }
    }
    
    public function findByID($id)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
        $seo = $this->copyElem($row);
        return $seo;
    }
    
    public function findBYObj(Application_Model_Seo $seo)
    {
        $sql = $this->getDbTable()->getAdapter()
            ->select()->from(Array('s'=>'guestbook_seo'))
                ->where('s.aktywny=?', 'tak')->where('anchor=?', $seo->getAnchor());
        
//        $sql = $this->getDbTable()->getAdapter()
//            ->select()->from(Array('s'=>'guestbook_seo'));
        
        //$result = $this->getDbTable()->getAdapter()->fetchRow($sql);            
        $result = $this->getDbTable()->getAdapter()->fetchAll($sql);            
        if (0 == count($result)) {
            return FALSE;
        }
        $row = $result->current();
        $seo = $this->copy($row);
        return TRUE;
    }
    
    private function copyElem($row)
    {
        $seo = new Application_Model_Seo();
        $seo->setId($row->id);
        $seo->setJezyk_kod($row->jezyk_kod);
        $seo->setSeourl($row->seourl);
        $seo-> setZendurl($row->zendurl);
        $seo-> setAnchor($row->anchor);
        $seo-> setAktywny($row->aktywny);
        $seo-> setRouter($row->router);
        $seo-> setLabel($row->label);
        return $seo;
    }


    public function fetchAll()
    {
        $resultSet = $this->getDbTable()->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = $this->copyElem($row);
            $entries[] = $entry;
        }
        return $entries;
    }
    

}

