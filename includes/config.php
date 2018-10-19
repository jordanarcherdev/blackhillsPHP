<?php
  switch ($_SERVER["SCRIPT_NAME"]) {


      case "/locking-wheel-nut-removal-peterhead.php":
        $CURRENT_PAGE = "wnr";
        $PAGE_TITLE = "Locking Wheel Nut Removal";
        break;

        case "/motorcycle-parts-in-peterhead.php":
          $CURRENT_PAGE = "parts";
          $PAGE_TITLE = "Motorcycle Parts";
          break;

          case "/motorcycle-tyres-in-peterhead.php":
            $CURRENT_PAGE = "biketyres";
            $PAGE_TITLE = "Motorcycle Tyres";
            break;

            case "/tpms-sensor-valves.php":
              $CURRENT_PAGE = "sensors";
              $PAGE_TITLE = "TPMS Sensor Valves";
              break;

              case "/contact-us.php":
                $CURRENT_PAGE = "contact";
                $PAGE_TITLE = "Contact Us";
                break;

    default:
      $CURRENT_PAGE = "home";
      $PAGE_TITLE = "Home";
      break;
  }

 ?>
