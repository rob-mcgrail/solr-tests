<?php
class Helpers {
  public static function search_link($q) {
    # A helper for printing links straight to the TKI search
    # The classname replace55 is swapped out byPrettyPassesReporter as required.
    return "<a href=\"http://www.tki.org.nz/tki-content/search?&TKIGlobalSearch=1&SearchText=".$q."\" target=\"_blank\" title=\"Link to TKI search results page\" class=\"replace55\">".$q."</a>";
  }
}
?>
