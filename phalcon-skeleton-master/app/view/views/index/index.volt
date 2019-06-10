{% extends "../templates/main.volt" %}
{%  block content %}
    <?php 
    	foreach ($names as $name) {
    		echo "$name<br>";
    	}
    ?>
{%  endblock %}
