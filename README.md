# Sage 10 Bootstrap Components

Easily use Bootstrap 4 components as Sage 10 components. 

You can help with adding components by creating a pull request.

## Installation

Install the composer package (in the theme folder).


```bash
composer require tombroucke/sage-bootstrap-components
```

Publish the components to app/View/Components and resources/views/components.

```bash
wp acorn vendor:publish --tag="Bootstrap components"
```

## Usage

Examples:

### Button
```php
<x-button href="https://tombroucke.be" target="_blank" theme="secondary">
	Button label
</x-button>
<x-button tag="button" type="submit" theme="primary">
	Button label
</x-button>
```

### Breadcrumb

```php
<x-breadcrumb>
	<x-breadcrumb.item>
		Home
	</x-breadcrumb.item>
	<x-breadcrumb.item href="https://tombroucke.be" active>
		News
	</x-breadcrumb.item>
</x-breadcrumb>
```

### Alert
To enable the custom alert component, please delete the existing alert first

```php
<x-alert theme="success" animate dismissible>
	This is a success alert—check it out!
</x-alert>
```

### Accordion
```php
<x-collapse.accordion id="my-accordion">
	<x-collapse.accordion.item accordion-id="my-accordion" show>
		<x-slot name="heading">
			First item title
		</x-slot>
		First item content
	</x-collapse.accordion.item>
	<x-collapse.accordion.item accordion-id="my-accordion">
		<x-slot name="heading">
			Second item title
		</x-slot>
		Second item content
	</x-collapse.accordion.item>
</x-collapse.accordion>
```

### Cards
```php
<x-card.deck>
	<x-card class="bg-primary">
		Card content
		<x-slot name="footer">Card footer</x-slot>
	</x-card>
	<x-card>
		<x-slot name="image">
			<img class="card-img-top" src="https://picsum.photos/400/300" alt="Card image cap">
		</x-slot>
		Card content
		<x-slot name="footer">Card footer</x-slot>
	</x-card>
</x-card.deck>
```

### Tabs
```php
<x-nav.tabs>
	<!-- Nav -->
	<x-slot name="nav">
		<x-nav.tab.link pane="home" active>
			Home
		</x-nav.tab.link>
		<x-nav.tab.link pane="profile">
			Profile
		</x-nav.tab.link>
		<x-nav.tab.link pane="contact">
			Contact
		</x-nav.tab.link>
	</x-slot>
	
	<!-- Content -->
	<x-slot name="panes">
		<x-nav.tab.pane id="home" show>
			Home content
		</x-nav.tab.pane>
		<x-nav.tab.pane id="profile">
			Profile content
		</x-nav.tab.pane>
		<x-nav.tab.pane id="contact">
			Contact content
		</x-nav.tab.pane>
	</x-slot>
</x-nav.tabs>
```

### Modal
```php
<!-- Modal -->
<x-modal id="my-modal">
	<x-slot name="title">
		Title
	</x-slot>
	Content
	<x-slot name="footer">
		<x-button tag="button" type="button" theme="secondary" data-dismiss="modal">
			Close
		</x-button>
		<x-button tag="button" type="button" theme="primary">
			Save changes
		</x-button>
	</x-slot>
</x-modal>

<!-- Modal trigger -->
<x-button data-toggle="modal" data-target="#my-modal">
	Launch demo modal
</x-button>
```