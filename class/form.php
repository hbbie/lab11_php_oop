<?php

class Form
{
    protected $action;
    protected $submit;
    protected $fields = [];

    public function __construct($action = "", $submit = "Simpan")
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function addField($name, $label, $type = "text", $options = [])
    {
        $this->fields[] = [
            'name' => $name,
            'label' => $label,
            'type' => $type,
            'options' => $options
        ];
    }

    public function displayForm()
    {
        echo "<form method='POST'><table>";

        foreach ($this->fields as $f) {

            echo "<tr><td>{$f['label']}</td><td>";

            switch ($f['type']) {

                case 'radio':
                    foreach ($f['options'] as $val => $txt) {
                        echo "<label><input type='radio' name='{$f['name']}' value='$val'> $txt</label> ";
                    }
                    break;

                case 'checkbox':
                    foreach ($f['options'] as $val => $txt) {
                        echo "<label><input type='checkbox' name='{$f['name']}[]' value='$val'> $txt</label> ";
                    }
                    break;

                case 'select':
                    echo "<select name='{$f['name']}'>";
                    foreach ($f['options'] as $val => $txt) {
                        echo "<option value='$val'>$txt</option>";
                    }
                    echo "</select>";
                    break;

                case 'textarea':
                    echo "<textarea name='{$f['name']}'></textarea>";
                    break;

                default:
                    echo "<input type='{$f['type']}' name='{$f['name']}'>";
            }

            echo "</td></tr>";
        }

        echo "<tr><td></td><td><input type='submit' value='{$this->submit}'></td></tr>";
        echo "</table></form>";
    }
}
