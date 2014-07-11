PHPDIR    = /cygdrive/c/xampp-portable/php
WPTOOLDIR = c:/xampp-portable/wordpress/tools
PLUGINDIR = ../..
LANGDIR = $(PLUGINDIR)/languages


$(LANGDIR)/standard-widget-extensions-ja-new.po : $(LANGDIR)/standard-widget-extensions.pot
	msgmerge -o $(LANGDIR)/standard-widget-extensions-ja-new.po $(LANGDIR)/standard-widget-extensions-ja.po $(LANGDIR)/standard-widget-extensions.pot

$(LANGDIR)/standard-widget-extensions.pot : $(PLUGINDIR)/standard-widget-extensions.php additional_words
	$(PHPDIR)/php $(WPTOOLDIR)/makepot.php wp-plugin $(PLUGINDIR) $(LANGDIR)/standard-widget-extensions.pot; cat additional_words >> $(LANGDIR)/standard-widget-extensions.pot

