
// is triggered by calling isset() or empty() on inaccessible properties.
public bool __isset ( string $name )

public function __isset($name)
    {
        echo "Is '$name' set?\n";
        return isset($this->data[$name]);
    }
