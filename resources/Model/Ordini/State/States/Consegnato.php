<?php
/**
 * Class to manage State CONSEGNATO
 */
class Model_Ordini_State_States_Consegnato extends Model_Ordini_State_OrderAbstract
{
    /**
     * Status name
     */
    const STATUS_NAME = "Consegnato";
    const STATUS_FIELD_DATA = "data_consegnato";
    protected $_className = "Consegnato";
    

    /**
     * Returns the Next state: ARCHIVIATO
     * @return string
     */
    public function getNextState()
    {
        return Model_Ordini_State_States_Archiviato::STATUS_NAME;
    }
    
    /**
     * Returns the Next state: ARRIVATO
     * @return string
     */
    public function getPrevState()
    {
        return Model_Ordini_State_States_Arrivato::STATUS_NAME;
    }
    
    /**
     *  Return true for this state
     * @return bool
     */
    public function is_Consegnato() 
    { 
        return true; 
    }
    
    public function canUser_ViewDettaglio() 
    {
        return true;
    }
    
}
