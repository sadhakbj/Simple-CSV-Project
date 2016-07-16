<?php
namespace App\Services;

/**
 * Class CSVService
 * @package App\Services
 */
class CSVService
{
    /**
     * This stores the Data to CSV File.
     * @param $clientsInfo
     * @return bool
     */
    public function storeData(array $clientsInfo)
    {
        $clientsInfo = array_values(array_except($clientsInfo, '_token'));
        $fileName    = getCSVFile();

        if (file_exists($fileName)) {
            $file = fopen($fileName, "a");
            fputcsv($file, $clientsInfo);
        } else {
            $file    = fopen($fileName, "w");
            $heading = [
                "Name",
                "Gender",
                "Phone",
                "Email",
                "Address",
                "Nationality",
                "Date Of Birth",
                "Educational Background",
                "Preferred Mode of Contact",
            ];
            fputcsv($file, $heading);
            fputcsv($file, $clientsInfo);
        }
        fclose($file);

        return true;
    }

    /**
     * Get the detail of any csv data.
     * @param $id
     * @return mixed
     */
    public function getDetail($id)
    {
        $fileName = getCSVFile();

        $allCSVData = $this->getAllData($fileName);

        if (array_key_exists($id, $allCSVData)) {
            return $allCSVData[$id];
        }

        return null;
    }

    /**
     * Returns all the CSV data from the file.
     * @param string $filename
     * @param string $delimiter
     * @return array|bool
     */
    public function getAllData($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename)) {
            return false;
        }

        $header = null;
        $data   = [];
        if (($handle = fopen($filename, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }

        return $data;
    }
}
