<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
<<<<<<< HEAD
    // Configuration de l'email
    public $fromEmail = 'hamdanihasna610@gmail.com'; // Adresse email de l'expéditeur
    public $fromName = 'AUTO'; // Nom de l'expéditeur
    public $recipients = ['hasnahs463@gmail.com']; // Liste des destinataires

    // Configuration du serveur SMTP
    public $SMTPHost = 'smtp.elasticemail.com'; // Serveur SMTP
    public $SMTPUser = 'hamdanihasna610@gmail.com'; // Nom d'utilisateur SMTP (ou email)
    public $SMTPPass = '85A81EA2BB04FDDDF2E61C2AD125D4FAA5404C585AF6110BC5230783A1AF3134793F017B39B883435A40BF8B9FE2BC72'; // Clé API ou mot de passe SMTP
    public $SMTPPort = 587; // Port pour TLS (ou 465 pour SSL)
    public $SMTPTimeout = 60; // Timeout du serveur SMTP
    public $SMTPCrypto = 'tls'; // Chiffrement (TLS ou SSL)

    // Autres paramètres
    public $mailType = 'html'; // Type d'email (html ou texte)
    public $charset = 'UTF-8'; // Encodage des caractères
=======
    public string $fromEmail  = '';
    public string $fromName   = '';
    public string $recipients = '';

    /**
     * The "user agent"
     */
    public string $userAgent = 'CodeIgniter';

    /**
     * The mail sending protocol: mail, sendmail, smtp
     */
    public string $protocol = 'mail';

    /**
     * The server path to Sendmail.
     */
    public string $mailPath = '/usr/sbin/sendmail';

    /**
     * SMTP Server Hostname
     */
    public string $SMTPHost = '';

    /**
     * SMTP Username
     */
    public string $SMTPUser = '';

    /**
     * SMTP Password
     */
    public string $SMTPPass = '';

    /**
     * SMTP Port
     */
    public int $SMTPPort = 25;

    /**
     * SMTP Timeout (in seconds)
     */
    public int $SMTPTimeout = 5;

    /**
     * Enable persistent SMTP connections
     */
    public bool $SMTPKeepAlive = false;

    /**
     * SMTP Encryption.
     *
     * @var string '', 'tls' or 'ssl'. 'tls' will issue a STARTTLS command
     *             to the server. 'ssl' means implicit SSL. Connection on port
     *             465 should set this to ''.
     */
    public string $SMTPCrypto = 'tls';

    /**
     * Enable word-wrap
     */
    public bool $wordWrap = true;

    /**
     * Character count to wrap at
     */
    public int $wrapChars = 76;

    /**
     * Type of mail, either 'text' or 'html'
     */
    public string $mailType = 'text';

    /**
     * Character set (utf-8, iso-8859-1, etc.)
     */
    public string $charset = 'UTF-8';

    /**
     * Whether to validate the email address
     */
    public bool $validate = false;

    /**
     * Email Priority. 1 = highest. 5 = lowest. 3 = normal
     */
    public int $priority = 3;

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     */
    public string $CRLF = "\r\n";

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     */
    public string $newline = "\r\n";

    /**
     * Enable BCC Batch Mode.
     */
    public bool $BCCBatchMode = false;

    /**
     * Number of emails in each BCC batch
     */
    public int $BCCBatchSize = 200;

    /**
     * Enable notify message from server
     */
    public bool $DSN = false;
>>>>>>> b3da94a285d2918939ed59599fb917cd18b2fb04
}
