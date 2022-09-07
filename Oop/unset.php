
// is invoked when unset() is used on inaccessible properties.
public void __unset ( string $name )

public function __unset($name)
    {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }
