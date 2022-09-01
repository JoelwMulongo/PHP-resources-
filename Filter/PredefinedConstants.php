
INPUT_POST (integer)
POST variables.
INPUT_GET (integer)
GET variables.
INPUT_COOKIE (integer)
COOKIE variables.
INPUT_ENV (integer)
ENV variables.
INPUT_SERVER (integer)
SERVER variables.
INPUT_SESSION (integer)
SESSION variables. (not implemented yet)
INPUT_REQUEST (integer)
REQUEST variables. (not implemented yet)
FILTER_FLAG_NONE (integer)
No flags.
FILTER_REQUIRE_SCALAR (integer)
Flag used to require scalar as input
FILTER_REQUIRE_ARRAY (integer)
Require an array as input.
FILTER_FORCE_ARRAY (integer)
Always returns an array.
FILTER_NULL_ON_FAILURE (integer)
Use NULL instead of FALSE on failure.
FILTER_VALIDATE_INT (integer)
ID of "int" filter.
FILTER_VALIDATE_BOOLEAN (integer)
ID of "boolean" filter.
FILTER_VALIDATE_FLOAT (integer)
ID of "float" filter.
FILTER_VALIDATE_REGEXP (integer)
ID of "validate_regexp" filter.
FILTER_VALIDATE_URL (integer)
ID of "validate_url" filter.
FILTER_VALIDATE_EMAIL (integer)
ID of "validate_email" filter.
FILTER_VALIDATE_IP (integer)
ID of "validate_ip" filter.
FILTER_VALIDATE_MAC (integer)
ID of "validate_mac_address" filter. (Available as of PHP 5.5.0)
FILTER_DEFAULT (integer)
ID of default ("unsafe_raw") filter. This is equivalent to FILTER_UNSAFE_RAW.
FILTER_UNSAFE_RAW (integer)
ID of "unsafe_raw" filter.
FILTER_SANITIZE_STRING (integer)
ID of "string" filter.
FILTER_SANITIZE_STRIPPED (integer)
ID of "stripped" filter.
FILTER_SANITIZE_ENCODED (integer)
ID of "encoded" filter.
FILTER_SANITIZE_SPECIAL_CHARS (integer)
ID of "special_chars" filter.
FILTER_SANITIZE_EMAIL (integer)
ID of "email" filter.
FILTER_SANITIZE_URL (integer)
ID of "url" filter.
FILTER_SANITIZE_NUMBER_INT (integer)
ID of "number_int" filter.
FILTER_SANITIZE_NUMBER_FLOAT (integer)
ID of "number_float" filter.
FILTER_SANITIZE_MAGIC_QUOTES (integer)
ID of "magic_quotes" filter.
FILTER_CALLBACK (integer)
ID of "callback" filter.
FILTER_FLAG_ALLOW_OCTAL (integer)
Allow octal notation (0[0-7]+) in "int" filter.
FILTER_FLAG_ALLOW_HEX (integer)
Allow hex notation (0x[0-9a-fA-F]+) in "int" filter.
FILTER_FLAG_STRIP_LOW (integer)
Strip characters with ASCII value less than 32.
FILTER_FLAG_STRIP_HIGH (integer)
Strip characters with ASCII value greater than 127.
FILTER_FLAG_ENCODE_LOW (integer)
Encode characters with ASCII value less than 32.
FILTER_FLAG_ENCODE_HIGH (integer)
Encode characters with ASCII value greater than 127.
FILTER_FLAG_ENCODE_AMP (integer)
Encode &.
FILTER_FLAG_NO_ENCODE_QUOTES (integer)
Don't encode ' and ".
FILTER_FLAG_EMPTY_STRING_NULL (integer)
(No use for now.)
FILTER_FLAG_ALLOW_FRACTION (integer)
Allow fractional part in "number_float" filter.
FILTER_FLAG_ALLOW_THOUSAND (integer)
Allow thousand separator (,) in "number_float" filter.
FILTER_FLAG_ALLOW_SCIENTIFIC (integer)
Allow scientific notation (e, E) in "number_float" filter.
FILTER_FLAG_PATH_REQUIRED (integer)
Require path in "validate_url" filter.
FILTER_FLAG_QUERY_REQUIRED (integer)
Require query in "validate_url" filter.
FILTER_FLAG_IPV4 (integer)
Allow only IPv4 address in "validate_ip" filter.
FILTER_FLAG_IPV6 (integer)
Allow only IPv6 address in "validate_ip" filter.
FILTER_FLAG_NO_RES_RANGE (integer)
Deny reserved addresses in "validate_ip" filter.
FILTER_FLAG_NO_PRIV_RANGE (integer)
Deny private addresses in "validate_ip" filter.
FILTER_FLAG_EMAIL_UNICODE (integer)
Accepts Unicode characters in the local part in "validate_email" filter. (Available as of PHP 7.1.0)
