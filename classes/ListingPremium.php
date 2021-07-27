<?php

class ListingPremium extends ListingBasic
{
  protected $status = 'premium';
  protected $description;
  protected static $allowed_tags = '<p><br><b><strong><em><u><ol><ul><li>';
  
     /**
     * Gets the local property $description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Cleans up and sets the local property $title
     * @param string $value to set property
     */
    public function setDescription($value)
    {
        $this->description = trim(strip_tags($value, self::$allowed_tags));
    }
  
    public function setValues($data = []) {
        parent::setValues($data);
        if (isset($data['description'])) {
            $this->setDescription($data['description']);
        }
    } 
}