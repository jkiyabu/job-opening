<?php
    class Job
    {
        private $title;
        private $description;
        private $contact;

        function __construct($title, $description, $contact)
        {
            $this->title = $title;
            $this->description = $description;
            $this->contact = $contact;
        }

        function setTitle()
        {
            $this->title = $new_title;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setDescription()
        {
            $this->description = $new_description;
        }

        function getDescription()
        {
            return $this->description;
        }

        function setContact()
        {
            $this->contact = $new_contact;
        }

        function getContact()
        {
            return $this->contact;
        }

    }
?>
