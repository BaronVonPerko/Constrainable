# Constrainable
A simple trait to allow constraints to be applied to a model via a request parameter.

---

## Installation

*todo*

## Usage

Add the constraint to a model.

```php
use Constraints;
```

Let's say you have a route `mysite.test/users` that returns a list of users.  The controller may look like this:

```php
public function index(Request $request) {
    return User::get();
}
```

If you would like to constrain simply by a field:

```php
public $constrainables = ['name'];
```

Then, simply hit your endpoint like this:

`mysite.test?constraints={'name':'Chris Perko}`

If you would like to use a scope query:

```php
public $constrainableScopes = [ 'active' => 'scopeActive' ];
```

Then, the following URL would return only users that are active:

`mysite.test?constraints={'active':true}`

You can mix and match these constraints, such as this:

`mysite.test?constraints{'date_created':'2018-08-25', 'active':true}`

This would get all of the active users who created their account on 8/25.
