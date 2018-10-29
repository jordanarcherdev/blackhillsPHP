<?php
  switch ($_SERVER["SCRIPT_NAME"]) {


      case "/?id=locking-wheel-nut-removal-peterhead":
        $CURRENT_PAGE = "wnr";
        $PAGE_TITLE = "Locking Wheel Nut Removal";
        break;

        case "/?id=motorcycle-tyres-in-peterhead":
          $CURRENT_PAGE = "parts";
          $PAGE_TITLE = "Motorcycle Parts";
          break;

          case "/?id=motorcycle-parts-in-peterhead":
            $CURRENT_PAGE = "biketyres";
            $PAGE_TITLE = "Motorcycle Tyres";
            break;

            case "/?id=tpms-sensor-valves":
              $CURRENT_PAGE = "sensors";
              $PAGE_TITLE = "TPMS Sensor Valves";
              break;

              case "/?id=contact-us":
                $CURRENT_PAGE = "contact";
                $PAGE_TITLE = "Contact Us";
                break;

    default:
      $CURRENT_PAGE = "home";
      $PAGE_TITLE = "Home";
      break;
  }

 ?>
