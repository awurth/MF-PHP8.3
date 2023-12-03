# PHP 8.3

Released on November 23, 2023

## New features
- [Typed class constants](8.3/1_typed_class_constants.php) [[RFC](https://wiki.php.net/rfc/typed_class_constants)]
- [Invariant constant visibility](8.3/2_invariant_constant_visibility.php)
- [Dynamic class constant fetch](8.3/3_dynamic_class_constant_fetch.php) [[RFC](https://wiki.php.net/rfc/dynamic_class_constant_fetch)]
- [Dynamic enum member fetch](8.3/4_dynamic_enum_member_fetch.php)
- [Override attribute](8.3/5_override_attribute.php) [[RFC](https://wiki.php.net/rfc/marking_overriden_methods)]
- [`json_validate` function](8.3/6_json_validate.php) [[RFC](https://wiki.php.net/rfc/json_validate)]
- [Anonymous readonly classes](8.3/7_anonymous_readonly_classes.php)
- [Read-only properties cloning](8.3/8_readonly.php) [[RFC](https://wiki.php.net/rfc/readonly_amendments)]
- [`mb_str_pad` function](8.3/9_mb_str_pad.php)
- [`str_increment` and `str_decrement` functions](8.3/10_str_increment_decrement.php)
- [New `Randomizer` methods](8.3/11_randomizer.php) [[RFC](https://wiki.php.net/rfc/randomizer_additions)]
- [New `DOMElement` methods](8.3/12_dom.php)
- [Magic method closures and named arguments](8.3/14_magic_methods.php)
- CLI linter supports multiple files [[Doc](https://www.php.net/manual/en/features.commandline.options.php)]

## Deprecations and breaking changes
- [DateTime exceptions](8.3/15_1_datetime_exceptions.php) [[RFC](https://wiki.php.net/rfc/datetime-exceptions)]
- [Negative array indices](8.3/13_negative_array_indices.php)
- [`range` function error handling](8.3/15_2_range.php)
- [`unserialize` function error handling](8.3/15_3_unserialize.php) [[RFC](https://wiki.php.net/rfc/improve_unserialize_error_handling)]
- [Deprecate calling `get_class` and `get_parent_class` without arguments](8.3/15_4_deprecations.php)

[And many more...](https://www.php.net/releases/8.3/en.php#deprecations_and_bc_breaks)
