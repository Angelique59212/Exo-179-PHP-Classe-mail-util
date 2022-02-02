<?php

class Mail {
    private string $to;
    private string $subject;
    private string $message;
    private string $from;

    /**
     * @param string $to
     * @param string $subject
     * @param string $message
     * @param string $from
     */
    public function __constructor (string $to, string $subject, string $message, string $from) {
        $this ->setTo(trim(strip_tags($to)));
        $this ->setSubject(trim(strip_tags($subject)));
        $this ->setMessage(trim(strip_tags($message)));
        $this ->setFrom(trim(strip_tags($from)));
    }

    /**
     * @return string
     */
    public function getTo():string {
        return $this ->to;
    }

    /**
     * @param string $to
     */
    public function setTo(string $to):void {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getSubject():string {
        return $this ->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject):void {
        $this ->subject = $subject;
    }

    /**
     * @return string
     */
    public function getMessage():string {
        return $this ->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message):void {
        $this ->message = $message;
    }

    /**
     * @return array|string
     */
    public function getFrom():string {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom(string $from):void {
        $this ->from = $from;
    }

    /**
     * @param string $to
     * @param string $subject
     * @param string $message
     */
    public function userMail(string $to, string $subject, string $message):void {
        mail($this->to, $this->subject, $this->message, $this->from);
    }
}
