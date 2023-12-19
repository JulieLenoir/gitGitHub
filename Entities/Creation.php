<?php
class Creation

// propriétés de notre table
{
    private $id_creation;
    private $title_creation;
    private $description_creation;
    private $date_at;
    private $picture;

    /**
     * Get the value of id_creation
     */
    public function getId_creation()
    {
        return $this->id_creation;
    }

    /**
     * Set the value of id_creation
     *
     * @return  self
     */
    public function setId_creation($id_creation)
    {
        $this->id_creation = $id_creation;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle_creation()
    {
        return $this->title_creation;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle_creation($title_creation)
    {
        $this->title_creation = $title_creation;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription_creation()
    {
        return $this->description_creation;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription_creation($description_creation)
    {
        $this->description_creation = $description_creation;

        return $this;
    }

    /**
     * Get the value of date_at
     */
    public function getDate_at()
    {
        return $this->date_at;
    }

    /**
     * Set the value of date_at
     *
     * @return  self
     */
    public function setDate_at($date_at)
    {
        $this->date_at = $date_at;

        return $this;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }
}
