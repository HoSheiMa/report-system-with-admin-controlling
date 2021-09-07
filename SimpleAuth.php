<?php

/**
 * @author Arnaud Lemercier <arnaud@wixiweb.fr>
 * @copyright http://www.wixiweb.fr
 * @link http://codecanyon.net/item/simpleauth-very-simple-secure-login-system/232148
 * @link http://wixiweb.fr/scripts/simple-auth/
 */

/**
 * @author Arnaud Lemercier <arnaud@wixiweb.fr>
 * @copyright http://www.wixiweb.fr
 * @example <?php ${(require_once('SimpleAuth.php'))}->protectme(); ?>
 * @version 4.2
 */
//echo "Connected successfully";

class SimpleAuth
{

    // The users List ('Login' => 'Password')
    var $users = array(
        'ah786' => 'test123',             // User 1
        'user1500' => 'nico56it',         // User 2
        'ahmed' => 'ahmed123',       // User 3
        'andy' => 'andy123',       // User 4
        'warriorplus' => 'warriorplus123',       // User 4
    );

    // The users Groups ('User' => 'group')
    // or               ('User' => array('group1', 'group2'))
    var $groups = array(
        'admin' => 'administrator',                     // User 1 => 1 group
        'arnaud' => array('administrator', 'editor'),   // User 2 => 2 group
        'alexandra' => 'editor',                        // User 3 => 1 group
        // No group for User 4
    );

    var $usersMetas = array(
        'login@domain.com' => array(
            'phone' => '+33125362524',
            'email' => 'contact@domain.com',
            'skype' => 'john.doe',
        ),
        'admin' => array(
            'phone' => '+33125362524',
            'email' => 'admin@domain.com',
            'skype' => 'admin.skype',
        ),
    );

    // Configuration
    var $config = array(
        // Name of the cookie sent to the browser
        'session_id' => 'SIMPLEAUTH_SSID',
        // Locale for translation
        'locale' => 'EN',
        // Allow user to change locale
        'localeSwitcher' => true,
        // Defined if the session identifier must be regenerated on each HTTP request
        'active_regenerate_id' => true,
        // Parameter Name Action SimpleAuth reserved (Ex : ?simple_auth_action=logout)
        'action_key_name' => 'simple_auth_action',
        // Reserved name for the field actionValue
        'value_key_name' => 'simple_auth_value',
        // Reserved name for the field login
        'login_key_name' => 'simple_auth_login',
        // Reserved name for the field password
        'password_key_name' => 'simple_auth_password',
        // Namespace session SimpleAuth
        'session_namespace' => 'simple_auth',
        // Set True to show username and password for demo only
        'mode_demo' => false,
        // Defined the theme path
        'theme_path' => './Themes',
    );

    // Page options
    var $options = array(
        // Allowed Users List
        'allowedUsers' => NULL,
        // Allowed UserGroups List
        'allowedGroups' => NULL,
        // The page will be displayed after logout
        'logoutPage' => './',
        // Theme file : filename for enable, false for disable. Ex : flat/flat.php
        //'theme' => 'flat/flat.php',
        'theme' => false
    );

    // Base64 image file
    var $png = array(
        'login' => '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',
        'password' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAABIAAAASABGyWs+AAAACXZwQWcAAAAQAAAAEABcxq3DAAACkElEQVQ4y42SW0hTARzGv+2cueXOXGu3NqR5BdkctZWElhcQUdGyh9DK6PKiD1G9JL34FklRLwWWiRFd6Ea0KFFLNDINYk7NbOhkrryN5ZzbzO0ct7P1ZGjm8nv+vh983//PwSbUd2nrEXmG7gxL09rwot8xMeqorLgZngAAbqxgw2GSb72/y6TU77n6Y+jbtccmq5xZWHiXptl+YcVDxgIoNQVNk7zSQ2PD5Aer3cjnLd6N8tjIYiQQUPwXUF3d0qAqLDmlJj9BmzSTX1VO5bsGDU6JZ5wcmZ4sX/H9s0J2do2quCS/Thx4jxTtEnih7khw8DlkPruKUe+QMiEIYwJIckuGWCwlKa4DQmoc7JybZn2/QOUYkGrYxpUqVbUxAaEQPe2cdYIDBnBZodYlxycfPI2EsAMc1yjE0gRxzA34Amp2mfUhEFYg7LOB9H0EJ9wFsCEwCXmYn2rt3BBw9FjzRf3OtDrDbi3cHjk6ez+7C/aVywQEgwjBR39bm6V7JNy44idWh3NzzyYWlRa9zs3TUwxN422HZchi7tfzpp74FRqiiBv9DpvZVlf7EEPrNigru5Kpy8y5vjcrnQwGaQxaxvzWEWvlvdZXAbOdfepfYEAIJEhKpZpbTkC7DqBJSrlzoCKnKkgzcP/0RHt7vtR0dNSPA8DlNkz6PQFXJMJHYopcKBVh/xqA0Xg8Pj1daZRKBFhmaLx80XvbZDr3bHU9v8vdH2GjIKRpiCMwvWbEgYFHAaUyo7i7y5zFsiGv0/n1wd/j+ue95ihBlRF8EdQKTtP5wmjyjS6wf67Q3l7fA6Bno9ee8aDPM7cEmYyFSESohXFhEQAvgU3qzTAmCiT2mQjidP6AwHbylrcRAH4DMKgKnVu4RjEAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTAtMDItMTFUMTU6MzA6MzAtMDY6MDBDfIyqAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDA4LTEyLTE0VDEwOjAyOjUwLTA2OjAwSXgSOgAAAABJRU5ErkJggg==',
        'illustration' => 'iVBORw0KGgoAAAANSUhEUgAAALQAAAC0CAMAAAAKE/YAAAAAA3NCSVQICAjb4U/gAAADAFBMVEX///9fXmBdXV9aWlpYV1ZWU1JSUlJQTk9PTExKSkpIRENCQkI9Pj46OjozMzMpKSghISEZGRkQEBAJCQkFBQQAAABWU1JSUlJQTk9PTExKSkpKRkdCQkI9Pj46OjozMzMpKSghISEZGRkQEBAJCQkAAACBf4Bzc3Nxb3FmZmlaWlpWU1JSUlJQTk9PTExKSkpKRkdIRENCQkI9Pj46OjozMzMpKSghISGeoKGUlJSPkZOJiYhzc3NmZmZaWlpWU1JSUlJQTk9PTExCQkI9Pj46OjozMzOeoKGPkZOJiYhWU1JSUlJQTk9PTExKSkpCQkI9Pj46OjqgoqKZmZlWU1JSUlJQTk9PTExKSkpIRENCQkIzMzO9vb25u7tSUlJQTk9PTExKSkpKRkdIRENCQkLMzMzFxcVfXmBdXV9YV1ZKSkpKRkdIRENCQkLi5OTW1tbFxcVaWlpYV1ZWU1JSUlJQTk9PTExKSkre3t7Y2drMzMyJiYh7e3tzc3NfXmDm5ubi5OTe3t6PkZOMjIyEhITq7O3q6+ro6evm5ubi5OTY2drMzMzFxcW/wMG9vb2pqqulpaWUlJTx8/Lv7+/q7O3o6evm5ubi5OTe3t7MzMzFxcW/wMG9vb23uLmxsrOtra36+/r39/fx8/Lx8fPv7+/q7O3m5ubi5OTe3t7Y2drW1tbS09TMzMzFxcX////8/Pv6/Pz6+/r6+/z39/fy9PXx8/Lx8fPv7+/q7O3q6+rr6uzo6evm5ubi5OTe3t7Y2drW1tbS09TQ0tHQ0dPMzMzFxcW/wMG9vb25u7u3uLm1tbWxsrOvsLGtra2pqqulpaWkpqmgoqKeoKGZmZmUlJSPkZOMjZCMjIyJiYiHiIuEhYiEhIR/gYSBf4B7fIB7e3t6eXd2eXt3dXVzdHhzc3NycG9ucHJxb3FtbnFra2tmZmlmZmZgX15fXmBdXV9gXV1aWlpYV1ZZVlhWU1JSUlJST05QTk9PTExKSkpKR0VKRkdIRENCQkJCPz0/PDs6OjrIvRLiAAABAHRSTlMAERERERERERERERERERERERERERERIiIiIiIiIiIiIiIiIiIiIjMzMzMzMzMzMzMzMzMzMzMzM0RERERERERERERERERERFVVVVVVVVVVVVVVZmZmZmZmZmZmZnd3d3d3d3d3d4iIiIiIiIiIiJmZmZmZmZmZmZmqqqqqqqqqu7u7u7u7zMzMzMzMzMzMzMzMzN3d3d3d3d3d3d3d3d3d7u7u7u7u7u7u7u7u7u7/////////////////////////////////////////////////////////////////////////////////////////////////////////////+ird3QAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNAay06AAABkgSURBVHic7ZwJeBRV1objGMLvoAhowzgyso077vsMOqgjLowbuA0aERRRAcFlxoVNcBkVJejouKMgKgh2dXVVV1WnlywmYRMYksiaBEJi6E7Tne7sdEL877213XurursCgfA/PydNAEWf1+/5znfOrbozaWnH6lgdq2N1rP6/1Ukn9T4J1Ykn9joho7tprJTN1m/wwP4DUA0cNNQGq2/vE44/vrvBjJV+EsAdev7VmQ9Nmv7i3Ln/AvXmv9585ZUXpz+eOeaaCwYPtfXp1bPH8b/pbk68bKeec3Pmi/M+XMLYjfXV0o/mTc+85bwhZ9r6nJhxNCh+HCA+5+ZJc99fwiqMgJshCv1FbukH8x4fe91Q28np6endzGyznfXQSx8wOi78MHQ5ETtjX/LRy2NG/HHYySeekH5ctxEP+tOkuUs5Oy0tjezURWf4ZfMyR1x+5im90tOPvMFtaf2unjRviapwEpkZJ/Zrh93BMID71iFnDvptzx5HVG/bwGumv74U84Q1YgfrZFjwZWe/eevxWy8adkrvHkdGb5Btp9/8+NyvmFSuQJTEb1mt4G+Wvp15y+W2vkDvwx0otn7nZT79xlKi73Slk8nMAJmdgBYqjT5OqPf0sdcNGtbv5J7phw/8tKszX3qfZSgXK78zyEwSO5wKLPqmCs7yH76ceeslNjB7TujqKASjePA1k55+c6kpHmNmZgchM2YNqhgHBwR/aMTlg/v169O7V1dJbjv9LDDuXl9CegJX2likMRxOTWYzevCHuWVvvZw5dsTFZwJ5+pzY62DnJtp0zjzv6knTn37rg6+08WwC7UiBzEBnJIbmwBdyCvf1R29Pn/TQzRcO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',
        'lang_FR' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAFESURBVHjapJM7TsNAEIa/9RqjKECEkGgoKOgoaHKCdByBc3APDsIRaHID01ASRTxEgxI5zsvetb1DkcSJCUaKMtJqZzSrb2f/nVEiwj6mgAA4Wu67mAWmPtDqdB6+f2e73ftK3L+92yJcPT2e+0CzKBzt9uW/1zVurpc1KxBh/vwC0PQBbW3BeJwyHE5rAebto/T9s1MkywC0D2CMJYpmRNG8FuBG49IvPE1u0wUMIEkMg8GMOJ5T9yn5KC59AWxiNgEJvV5GHCf1kvffS1+3Tkh9bw1I0wSRBs65ehU3cpJlpJnbBBi0PsS5+qaSFUBAihyTWwC8hYgG50ApVa6tjlvlPAVOSIxdV2CtJQiEIPDrnxAcVKoxdi2iFSmYTD4r58MwrMSvcfSntgpoARfA8Y6zMAG+FKCXg6R3BBSAVfuO888AocKXohfLXWQAAAAASUVORK5CYII=',
        'lang_EN' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAK8AAACvABQqw0mAAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNAay06AAAAJMSURBVDiNpZNLSFQBFIa/e+feOyqNZTM+Umw0zYpIFyUlSCkYKYIVLUQCidJFOwuKCAp6EARBKyOqRSZpkosgKgsnChGHRjJDU4vUMiUcJ6d5e72PFmmzC8QfDv/qHP7zwS+YpslqJK5qGxCAnCVfnv/JBHQgDISARQng7oOe8aytG3nr+ckvv0EgFOZk7Q6Mjkdg6uhH6rjc3I9iUUhJMzjg68dbXMr5xvJcCbBYTZH9C+NU1RfhntDoG5xnU7ad7AIZNJjIz2Bv0QZKcqxUL/Sjlh7lZl8QwCIBvJg0sdmdFLV0sad8C9GMtWiaAZ8mAR0tGKQ4OE514DcDzhJcrigXL7niEEt3ZiFmpvOhrA7NB+W7EshNkyEaAVVnc7qFg5VpaPUNvJxbj2C1UXesBAAJYF9gmO32r/DNCyjwfAxCQfD5IBZDv3cfU7HCazfnkmVITaZXjtCynECWRZBEkCUIhCAhARQFAgGMcARUFUHTEB0OkE2wABY5nqA9lINzLpmIaaWx3oHs7oaqCsynzzC0CFJTE0yN4H0zwJVoDdZpP5MzQ3EGjzs/EovEKFvnRW6+xsPWzwzNghANYTEXeTfkp7lthtR8BzXtpwiPjtB5+1X8wImGQo7vlin43kNHYhlPzDzEpDXgtCPk2ZETFVp75rn1JYWKzutczXTTWLvt3wtqxDvFnbPdtImFjAyOEZqd4/ChAjzDUQxDRxz9gaerm/eeJC7csHH6TCX+XheAKgBrgSzAtpIOAEFgWuAvU2XJVyIdUIXV1vkPv+LghsFkl50AAAAASUVORK5CYII=',
        'lang_DE' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAENSURBVHjapJNNTsMwEIW/cdIKKZQIVWJT9hwgFyC3hVP0BGXDFnawQURRAsg/jW0WTSjdue1sLFt+bz7ZbyTGyDklwBy4HNdjygHfOVDWdf1xSvf1en2TA4X3nqqq0pBFiDGy2WwAihzInHP0fU/TNAeXp/cRkYPz5XKJcw4gywGstbRtS9u2SRRKKay1AOQAD1pRfGpCt4X/vyJyuJ8MouZHK+4mA6M185dXQtenEZRXmFm+JzDGsIgQQ0gyiMOA8cPe4PrRsLqdQUgMlfIMb1u4/yNwELMxVykIYaeZCKzdAhcgqWGMo2Zn4AYfeHruTgmjE6AEVsDiSPEX8C5ANg5SdqSBB5ycO86/AwCO1XbNM5YIzAAAAABJRU5ErkJggg==',
        'lang_ES' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAFzSURBVHjapJNNS1tBFIafkxnzoSZpsI1gFoLUP9CCm65KF+79df0H/QmlIARcudGFK0GCKJhFJX7cxNyZuXdmusiNGqngxQPDOQxzXt55OEdijLwnBKgCq0UuEw6YaKA9/L77N+IRVCmFjf6frgZW8Dn1r1/e6FkgRuzRMcCKBlR0GSEZ40ejxcdzPiIL12ptjegyAKUB1n871NItxDusXWJ6JzS7OVrCKy4q+MxBBzSAy1Ia+oZpcs9tX/Fw3sH+yGhvJzRqMkP9kmCeAoWANSmN2oD8sstw/4L4aY/WfcBf/4SN5D8O2thUA1ABMCYFMiq+Reuz5vzwF+nRARX/AQggYZbnR7Kip3BgjIWguNlK+Nis8m3TkvfOmPZqLMfwBHMe3mNM/iQw2DFIfZloThkTmX96AkwWAMxqqQcGxj5j4DJiNUD1bcMYQ8A69yjgfAycjEfITK/UOAvQBnpAs2TzGLgSQBWLpEoKeMDJe9f53wBKAZ093TMjpwAAAABJRU5ErkJggg==',
        'lang_FI' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABaklEQVR4XqWTsYrUUBSGv3Nyk1nFBUGw8CHEVnyNrRbUt7HdJ7DYZmEXC8vcHXArURTBTjs7nUHRQpRJMrlH/iqsKRZ2Pvjh55x8lxtILCLYBWdXlsvly5xztG0b57mNdxc5eHyqqGum3Sxy5KIyDNvYbLrouy4ihjj+8FNR10y7WeTI9YhgHEe+rVas12v+fF/z9PknRV0zVlP0nCIHuakyqBxuNDXJ4WZTwV4C1Gs2ZWRbmCFHbrq9MFLt3N1fYA4sHPYMYbca7tQFgomAAKx25BpPzuLw4BEnb76Co2OhdgRDgVESsxMOH97j5MVrEgQ/+gLJpwPUhUQLLhEmRQ4qvL/IIaL8jQilC559VNQ1024WITf96gpi6J3KwBsHQwBO6YMxmFEvQG7SUnhKuESq6RVIeDJKCSbAzBBy0Vf1Pxx9VuIq5CYz+51z3pcnGoe39x3x6vwLfYGI+Q0UuQY8ACqux7jz7/wP9z9bAtBtMEoAAAAASUVORK5CYII=',
        'lang_NL' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA6UlEQVR4XqWTsW7CMBRFr2uSUEGFiNQujEwMVT+ErUv/jH/o0n+p+IEuLJUIatKmtiP78V6GRGw2HOvK0znyYkVEuAXFy3nz/k7D8X4l8Hh4ffvGFaw+3p8mAGbkPYqX58gnKxAf+7mHuBLQ1HWgpoGvTriABusCXS4hjrgSgLcW4adGqGvEoLRmxwzBddu2lIo44t6BsdYijdHpA8YYpDE6EzCb7Q66KPH33yGG2X0Gb6sxYLk2zQgKcYRA4owB5xzyQMgzHRsQZwg4CgHN8QtX4BSABW/Fe0AaDe8gAc3L+zsNz3M3f+czmPeX0uGrJWYAAAAASUVORK5CYII=',
    );

    // Autorized locale
    var $locales = array('FR', 'EN', 'DE', 'ES', 'FI', 'NL');

    /**
     *  Start the page protection
     * @return SimpleAuth
     */
    function protectme($options = NULL)
    {
        // Set page options
        $this->setOptions($options);

        // Check if SimpleAuth is correctly installed
        $this->checkInstallationProblems();

        $locale = isset($_COOKIE['locale']) ? $_COOKIE['locale'] : NULL;
        $this->setLocale($locale);

        // Get the current action if exist
        $action = isset($_REQUEST[$this->config['action_key_name']])
            ? strtolower($_REQUEST[$this->config['action_key_name']])
            : NULL;

        // Start the session engine (if required for this action)
        $this->startAuth($action);

        switch ($action) {
            // Check if logout action is send
            case 'logout' :
                // Delete the current session
                $this->logout();

                if (isset($this->options['logoutPage'])) {
                    // Redirect to another page
                    $this->redirect($this->options['logoutPage']);
                } else {
                    // Build HTML login page
                    $this->printLoginPage();

                }

                break;

            // Get a PNG resource
            case 'png' :

                $value = isset($_GET[$this->config['value_key_name']])
                    ? $_GET[$this->config['value_key_name']]
                    : NULL;

                if (in_array($value, array_keys($this->png))) {
                    header('Content-Type: image/png');
                    echo base64_decode($this->png[$value]);
                } else {
                    header("HTTP/1.0 404 Not Found");
                }
                exit();
                break;

            // Get a PNG resource
            case 'lang' :

                $value = isset($_REQUEST[$this->config['value_key_name']])
                    ? $_REQUEST[$this->config['value_key_name']]
                    : NULL;

                if (is_null($value)) {
                    $value = isset($_COOKIE['locale']) ? $_COOKIE['locale'] : NULL;
                }

                if (in_array($value, array_keys($this->locales))) {
                    $this->setLocale($value);
                    setcookie('locale', $value);
                }
                break;

            case 'login' :

                $login = isset($_POST[$this->config['login_key_name']])
                    ? $_POST[$this->config['login_key_name']]
                    : NULL;

                $password = isset($_POST[$this->config['password_key_name']])
                    ? $_POST[$this->config['password_key_name']]
                    : NULL;

                if (empty($login) or empty($password)) {
                    $error = 1;
                    // Build HTML login page with error
                    $this->printLoginPage($error);
                    exit();
                }
                $email = $this->checkCredential($login, $password);
                if (!$email) {
                    $error = 2;
                    // Build HTML login page with error
                    $this->printLoginPage($error);
                    exit();
                }

                $role = $_SESSION['role'];





                // Create session
                $this->login($email, $role);

                break;
        }

        // Check if authentification is required
        if (!$this->isAuth()) {
            // Build HTML login page
            $this->printLoginPage();
            exit();
        }



        return $this;
    }

    function checkInstallationProblems()
    {

        $errors = array();

        // Check if HTTP header are sent
        if (headers_sent($filename, $linenum)) {
            $errors[] = array(
                'title' => 'Headers Already Sent',
                'description' => 'HTTP headers has been generated before SimpleAuth is loaded. <br/>',
                'solution' => 'Make sure that SimpleAuth is the first item on your page. </br>You must also be careful not to put a space or newline before SimpleAuth.<br/>If you include files before SimpleAuth, also check that they contain no space at the end of the PHP tags<br/>FILE: ' . $filename . '</br>LINE : ' . $linenum
            );
        }

        // Check if Content was in the buffer
        if (strlen(ob_get_contents()) > 0) {
            $errors[] = array(
                'title' => 'Content Before SimpleAuth',
                'description' => 'HTML (or characters) has been generated before SimpleAuth is loaded.',
                'solution' => 'Make sure that SimpleAuth is the first item on your page. </br>You must also be careful not to put a space or newline before SimpleAuth.<br/>If you include files before SimpleAuth, also check that they contain no space at the end of the PHP tags'
            );
        }

        // Check if Content was BOM characters
        if (ord(ob_get_contents()) == 239) {
            $errors[] = array(
                'title' => 'BOM (Byte order mark)</a> has been detected',
                'description' => 'The BOM character has been detected. (<a href="http://wikipedia.org/wiki/Byte_order_mark" target="_blank">wikipedia</a>)',
                'solution' => 'Open your script with <a href="http://notepad-plus-plus.org/ target="_blank">Notepad ++ editor</a> and convert to UTF-8 without BOM.'
            );
        }

        // Display installation errors
        if (count($errors) > 0) {
            echo '<div style="margin:auto;width:600px;border:1px solid red;padding:10px;font-family:tahoma">';
            echo '<h1>SimpleAuth Installation Problems :</h1>';
            foreach ($errors as $k => $error) {
                echo '<div><hr/><h3>Issue #' . ($k + 1) . ' : ' . $error['title'] . '</h3><p><b>Description : </b>' . $error['description'] . '</p><p><b>Solution : </b>' . $error['solution'] . '</p></div>';
            }
            echo '</div>';
            exit();
        }
    }

    /**
     * Set the locale for translation
     * @param string $value
     */
    function setLocale($value)
    {
        if (in_array($value, $this->locales)) {
            $this->config['locale'] = $value;
        }
    }

    /**
     * Check if user is authenticate
     * @return bool
     */
    function isAuth()
    {
        // Return true If the session login is in autorised Login list
        $ns = $this->config['session_namespace'];

        if (!isset($_SESSION[$ns]['login'])) {
            return false;
        }



        return true;
    }

    /**
     * Check if login and password is correct
     * @param string $login
     * @param string $password
     * @return bool
     */
    public $conn = null;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

// Create connection
        $this->conn = new mysqli($servername, $username, $password, 'project_11');
// Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function checkCredential($login,
                             $password)
    {

        $r = $this->conn->query("SELECT * FROM `users` WHERE `email`='$login' or `username`='$login' and `password`='$password'");

        // Check if login exist
        if ($r && $r->num_rows > 0) {
            $r = $r->fetch_array(MYSQLI_ASSOC);
            $_SESSION['role'] = $r['role'];
            $_SESSION['username'] = $r['username'];
            return $r['email'];
        }

        return false;
    }

    /**
     * Check if user is allowed
     * @param string $login
     * @return bool
     */
    function isAllowed($login)
    {

        // Check if login exist
        if (!in_array($login,
            array_keys($this->users))) {
            return false;
        }

        // Is Allowed if usersAllowedList and allowedGroups aren't define
        if (!isset($this->options['allowedUsers'])
            && !isset($this->options['allowedGroups'])
        ) {
            return true;
        }

        // Is not Allowed if login is not in usersAllowedList
        if (isset($this->options['allowedUsers'])
            && !in_array($login, $this->options['allowedUsers'])) {
            return false;
        }

        // Is not Allowed if login is not in usersAllowedList
        if (isset($this->options['allowedGroups'])) {
            // If login is in a group (or in many groups)
            if (in_array($login, array_keys($this->groups))) {
                // Single group
                if (is_string($this->groups[$login])) {
                    // The userGroup is not allow
                    if (!in_array($this->groups[$login], $this->options['allowedGroups'])) {
                        return false;
                    }
                } // Multi group
                elseif (is_array($this->groups[$login])) {
                    $countAllowed = 0;
                    foreach ($this->groups[$login] as $group) {
                        if (in_array($group, $this->options['allowedGroups'])) {
                            $countAllowed++;
                        }
                    }
                    // Nothing group is allowed
                    if ($countAllowed < 1) {
                        return false;
                    }
                } // Undefined
                else {
                    return false;
                }
            } // The login have no group but a group is require
            else {
                return false;
            }
        }

        // Return true if no error
        return true;
    }


    /**
     * Register the session
     * @param type $login
     * @param type $password
     */
    function login($login, $role)
    {
        $ns = $this->config['session_namespace'];
        $_SESSION[$ns]['login'] = $login;
        $_SESSION[$ns]['role'] = $role;
    }

    /**
     * initialise the session
     */
    function startAuth($action = null)
    {
        // Dont start session when loading resources
        if (in_array($action, array('png'))) {
            return true;
        }

        // Set the session cookie name
        session_name($this->config['session_id']);

        // Send the session cookie
        session_start();

        // Change session id for each http request
        if ($this->config['active_regenerate_id']) {
            session_regenerate_id(true);
        }
    }

    /**
     * Return the locale for translation
     */
    function getLocale()
    {
        // Get the current local
        $locale = strtoupper($this->config['locale']);

        // Check if the locale is autorised
        if (in_array($locale, $this->locales)) {
            return $locale;
        } else {
            return 'EN';
        }
    }

    /**
     * Set Page options
     * @param Array $options
     */
    function setOptions($options)
    {
        if (is_array($options)) {
            $this->options = array_merge($this->options, $options);
        }
    }

    /**
     * Get message error
     * @param int $errorCode
     * @return string Text of error
     */
    function getErrorMsg($errorCode)
    {
        $locale = $this->getLocale();

        $errorList['EN'] = array(
            1 => 'Login and password fields are required',
            2 => 'Wrong Username/Email and password combination',
            3 => 'You don\'t have permission to access this page',
            99 => 'Unknown Error'
        );

        $errorList['FR'] = array(
            1 => 'L\'identifiant et le mot de passe sont obligatoires',
            2 => 'Mauvaise combinaison d\'identifiant et mot de passe',
            3 => 'Vous ne disposez pas des droits permettant d\'accéder à cette page',
            99 => 'Erreur inconnue'
        );

        $errorList['DE'] = array(
            1 => 'Der Benutzername und Kennwort erforderlich',
            2 => 'Falsche Benutzername und Passwort Kombination',
            3 => 'Sie haben keine Berechtigung diese Seite zu betreten',
            99 => 'Unbekannter Fehler'
        );

        $errorList['ES'] = array(
            1 => 'El inicio de sesión y la contraseña son necesaria',
            2 => 'La combinación del inicio de sesión y de la contraseña es incorrecta',
            3 => 'Usted no tiene permiso para ver esta página',
            99 => 'Error desconocido'
        );

        $errorList['FI'] = array(
            1 => 'Täytä vaaditut kentät',
            2 => 'Virheellinen käyttäjätunnus tai salasana',
            3 => 'Käyttöoikeutesi ei riitä sivulle kirjautumiseen',
            99 => 'Tuntematon virhe'
        );

        $errorList['NL'] = array(
            1 => 'Het is noodzakelijk om een gebruikersnaam en wachtwoord in te voeren',
            2 => 'Verkeerde gebruikersnaam en wachtwoord combinatie',
            3 => 'Je hebt geen toestemming om deze pagina te bekijken',
            99 => 'Onbekende fout'
        );


        if (!in_array($errorCode,
            array_keys($errorList[$locale]))) {
            $errorCode = 99;
        }

        return $errorList[$locale][$errorCode];
    }

    /**
     * Get a translate text
     */
    function text($str)
    {
        // Get current translation
        $locale = $this->getLocale();

        // Define french translation
        $textList['FR'] = array(
            "Secure Area" => "Espace sécurisé",
            "Login" => "Identifiant",
            "Password" => "Mot de passe",
            "Sign In" => "Se connecter",
            "Return" => "Retour",
        );

        // Define deutsch translation
        $textList['DE'] = array(
            "Secure Area" => "Geschützter Bereich",
            "Login" => "Benutzername",
            "Password" => "Passwort",
            "Sign In" => "Einloggen",
            "Return" => "Rückkehr",
        );

        // Define Spanish translation
        $textList['ES'] = array(
            "Secure Area" => "Zona segura",
            "Login" => "Cuenta",
            "Password" => "Contraseña",
            "Sign In" => "Iniciar sesión",
            "Return" => "Volver",
        );

        // Define Finnish translation
        // Thanks to Tero Talvio for translation
        $textList['FI'] = array(
            "Secure Area" => "Kirjaudu sisään",
            "Login" => "Käyttäjätunnus",
            "Password" => "Salasana",
            "Sign In" => "Kirjaudu",
            "Return" => "Paluu",
        );

        // Define Dutch translation
        // Thanks to Sjoukens for translation
        $textList['NL'] = array(
            "Secure Area" => "Beveiligd gedeelte",
            "Login" => "Gebruikersnaam",
            "Password" => "Wachtwoord",
            "Sign In" => "Inloggen",
            "Return" => "Terug",
        );

        if (!isset($textList[$locale])
            || !in_array($str, array_keys($textList[$locale]))
        ) {
            return $str;
        }

        return $textList[$locale][$str];
    }

    /**
     * Destroy user session
     */
    function logout()
    {
        // Unset all session variables
        session_unset();

        // Delete the session file
        session_destroy();
    }

    /**
     * Redirect with http header
     */
    function redirect($page)
    {
        header('Location: ' . $page);
        header('Content-Type: text/html; charset=UTF-8');
        exit('<a href="' . $page . '">' . $this->text('Return') . '</a>');
    }

    /**
     * Get the current user login
     * @return string user login
     */
    function getLogin()
    {
        $ns = $this->config['session_namespace'];
        if (isset($_SESSION['username'])) {
            return $_SESSION['username'];
        }
    }

    /**
     * Return one or all additionnals informations about a user
     *
     * @param string $data |null index of data (Ex: email, phone, etc)
     * @return array|string
     */
    function getMetas($data = null)
    {

        $info = null;

        if (isset($this->usersMetas[$this->getLogin()])
            && is_array($this->usersMetas[$this->getLogin()])) {
            // Need only one data
            if ($data !== null) {
                if (key_exists($data, $this->usersMetas[$this->getLogin()])) {
                    // Return select information
                    $info = $this->usersMetas[$this->getLogin()][$data];
                };
            } else {
                // Return all informations
                $info = $this->usersMetas[$this->getLogin()];
            }
        }
        return $info;
    }

    function printLoginPage($errorCode = NULL)
    {
        header('Content-Type: text/html; charset=UTF-8');

        echo $this->getLoginPage($errorCode);
    }

    function hasTheme()
    {
        if (isset($this->options['theme'])
            && (bool)$this->options['theme']
            && is_file($this->getThemeFile())
            && is_readable($this->getThemeFile())
        ) {
            return true;
        } else {
            return false;
        }
    }

    function getThemeFile()
    {
        return $this->config['theme_path'] . DIRECTORY_SEPARATOR . $this->options['theme'];
    }

    /**
     * Get the login page HTML code
     * @param int $errorCode
     * @return string HTML code
     */
    function getLoginPage($errorCode = NULL)
    {
        // Set Error message if exist
        $error = "";
        if ($errorCode != null) {
            $error = '<div class="error">' . $this->getErrorMsg($errorCode) . '</div>';
        }

        // Get all view variables
        $action_key_name = $this->config['action_key_name'];
        $value_key_name = $this->config['value_key_name'];
        $login_key_name = $this->config['login_key_name'];
        $password_key_name = $this->config['password_key_name'];
        $localeSwitcher = $this->config['localeSwitcher'];
        $img_password = $this->png['password'];
        $img_login = $this->png['login'];
        $text_secure_area = $this->text('CR - Members Area');
        $text_login = $this->text('Username');
        $text_password = $this->text('Password');
        $text_sign_in = $this->text('Sign In');
        $locale = strtolower($this->getLocale());
        $self = $_SERVER['PHP_SELF'];

        // DEMO INFORMATION :
        $userList = '';
        if ($this->config['mode_demo']) {
            $userList = '<div style="margin:100px auto;width:320px;font-size:11px;background:#fff;padding:5px;">';
            $userList .= '<a href="flat.php">Try new "Flat" theme</a>';
            $userList .= '<h3>Demo accounts :</h3><table>';
            $userList .= '<tr><td style="background:#ccc">Login</td><td style="background:#ccc">Password</td><td style="background:#ccc">Groups</td></tr>';
            foreach ($this->users as $login => $password) {
                $userList .= '<tr><td><b>' . $login . '</b></td><td><i>' . $password . '</i></td><td>';
                if (in_array($login, array_keys($this->groups))) {
                    if (is_string($this->groups[$login])) {
                        $userList .= $this->groups[$login];
                    } elseif (is_array($this->groups[$login])) {
                        $userList .= implode(', ', $this->groups[$login]);
                    } else {
                        $userList .= '<i style="color:#666">No group</i>';
                    }
                } else {
                    $userList .= '<i style="color:#666">No group</i>';
                }
                $userList .= '</td></tr>';

            }
            $userList .= '</table></div>';
        }

        if ($localeSwitcher) {
            $localeSwitcher = <<<EOFHTML
            <div class="localeContainer">
                <a href="?${'action_key_name'}=lang&amp;${'value_key_name'}=EN"><img src="?${'action_key_name'}=png&amp;${'value_key_name'}=lang_EN" alt="EN" title="English"/></a>
                <a href="?${'action_key_name'}=lang&amp;${'value_key_name'}=FR"><img src="?${'action_key_name'}=png&amp;${'value_key_name'}=lang_FR" alt="FR" title="French"/></a>
                <a href="?${'action_key_name'}=lang&amp;${'value_key_name'}=DE"><img src="?${'action_key_name'}=png&amp;${'value_key_name'}=lang_DE" alt="DE" title="Deutsch"/></a>
                <a href="?${'action_key_name'}=lang&amp;${'value_key_name'}=ES"><img src="?${'action_key_name'}=png&amp;${'value_key_name'}=lang_ES" alt="ES" title="Spanish"/></a>
                <a href="?${'action_key_name'}=lang&amp;${'value_key_name'}=FI"><img src="?${'action_key_name'}=png&amp;${'value_key_name'}=lang_FI" alt="FI" title="Finnish"/></a>
                <a href="?${'action_key_name'}=lang&amp;${'value_key_name'}=NL"><img src="?${'action_key_name'}=png&amp;${'value_key_name'}=lang_NL" alt="NL" title="Dutch"/></a>
            </div>
EOFHTML;
        }


        // Load External Template if exist
        if ($this->hasTheme()) {
            ob_start();
            $theme_path = dirname($this->getThemeFile()) . '/';
            include($this->getThemeFile());
            $html = ob_get_clean();
            // Return html template if is correctly load
            if (!empty($html)) {
                return $html;
            }
        }


        // Set defualt HTML page
        $html = <<<EOFHTML
<!doctype html>
<html lang="${locale}">
<head>
        <title>${text_secure_area}</title>
	<meta name="generator" content="SimpleAuth" />
        <meta charset="UTF-8">
	<meta name="robots" content="noindex, nofollow">
	<style type="text/css">
        html{
            height:100%;
            background: #ffffff; /* old browsers */
            background: -moz-linear-gradient(top, #ffffff 0%, #ededed 100%); /* firefox */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#ededed)); /* webkit */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 ); /* ie */
        }
        body{
            font-family : Verdana, Sans-serif;
            font-size:12px;
        }
        form{
            margin:0;
            padding:0;
        }
        .cadre {
            border: 1px solid #ccc;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 1px 1px 2px #919191;
            -moz-box-shadow: 1px 1px 2px #919191;
            box-shadow: 1px 1px 2px #919191;
        }
        .loginContainer {
            width:540px;
            margin:160px auto;
        }
        .cadreContent{
            margin:20px;
        }
        .localeContainer{
            margin:10px;
            text-align:center;
        }
        .localeContainer img{
            margin:5px;
            border:none;
        }
        .localeContainer a{
            text-decoration:none;
        }
        .gradient{
            background: #FCFCFC; /* old browsers */
            background: -moz-linear-gradient(top, #ffffff 0%, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%); /* firefox */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(50%,#f1f1f1), color-stop(51%,#e1e1e1), color-stop(100%,#f6f6f6)); /* webkit */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0 ); /* ie */
        }
        .title{
            font-size:20px;
            margin-bottom:20px;
            font-weight:bold;
        }
        .illustration{
            float:left;
            width:200px;
            height:200px;
        }
        .illustration img{
            width:180px;
            height:180px;
        }
        .loginform{
            float:left;
            margin:20px;
        }
        .clear{
            clear:both;
        }
        .login{
            padding:3px 3px 3px 20px;
            background:#fff url(data:image/png;base64,${'img_login'}) 3px 3px no-repeat;
        }
        .password{
            padding:3px 3px 3px 20px;
            background:#fff url(data:image/png;base64,${'img_password'}) 3px 3px no-repeat;
        }
        .field{
            margin-top:2px;
            border:1px solid #999;
        }
        .field:focus{
            border:1px solid #BE974C;
        }
        .buttons{
            background:#828c95;
            border:2px 0 0 0 #FFF;
        }
        .buttonsContent{
            margin:5px;
            text-align:right;
        }
        .error{
            background: #FFD3D3;
            border : 1px solid red;
            color: red;
            padding:10px;
            margin:10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 1px 1px 2px #919191;
            -moz-box-shadow: 1px 1px 2px #919191;
            box-shadow: 1px 1px 2px #919191;
        }
	</style>
</head>
<body>
	<div class="loginContainer">
		${error}
		<div class="cadre gradient">
			<div class="cadreContent">
				<div class="illustration"><img src="?${'action_key_name'}=png&amp;${'value_key_name'}=illustration" alt="" /></div>
				<div class="loginform">
                                        <form action="${'self'}" method="post">
						<input type="hidden" name="${'action_key_name'}" value="login"/>
						<div class="title">${'text_secure_area'}</div>
						<div class="label">${'text_login'} : </div>
						<div class="input"><input class="field login" type="text" name="${'login_key_name'}" value=""/></div>
						<div class="label">${'text_password'} : </div>
						<div class="input"><input class="field password" type="password" name="${'password_key_name'}" value=""/></div>
						<div class="buttonsContent"><input type="submit" value="${'text_sign_in'}"/></div>
					</form>
				</div>
			</div>
			<div class="clear"></div>
		</div>
        ${localeSwitcher}
        ${userList}
	</div>

</body>
</html>
EOFHTML;
        return $html;
    }

}

// Create a instance of SimpleAuth
$simpleAuthInstance = new SimpleAuth();

// Return the name of this instance
return 'simpleAuthInstance';
