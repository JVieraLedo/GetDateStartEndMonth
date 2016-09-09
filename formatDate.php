public static function formatearFechaConMes($fechaIN, $month, $place)
    {
        $aDate = explode('/', $fechaIN);
        switch ($place) {
            case 'start':
                $fechaOUT = strtotime('first day of ' . $month . ' month', strtotime(date($aDate[2] . '-' . $aDate[1] . '-' . $aDate[0])));
                break;
            case 'end':
                $fechaOUT = strtotime('last day of ' . $month . ' month', strtotime(date($aDate[2] . '-' . $aDate[1] . '-' . $aDate[0])));
                break;
            default:
                $fechaOUT = strtotime('first day of +' . $month . ' month', strtotime(date($aDate[2] . '-' . $aDate[1] . '-' . $aDate[0])));
                break;
        }
        return date('d/m/Y', $fechaOUT);
    }
