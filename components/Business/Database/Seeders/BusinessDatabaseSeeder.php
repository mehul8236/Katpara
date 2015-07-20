<?php namespace Components\Business\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BusinessDatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		 
		//Empty the tables
        \DB::table('countries')->delete();
        \DB::table('fields')->delete();

        $fields = [
        	['id' => '1' , 'name' => 'agriculture', 'label' => 'Agriculture', 'description' => 'Agriculture industry'],
        	['id' => '2' , 'name' => 'accounting', 'label' => 'Accounting', 'description' => 'Accounting industry'],
        	['id' => '3' , 'name' => 'advertising', 'label' => 'Advertising', 'description' => 'Advertising industry'],
        	['id' => '4' , 'name' => 'aerospace', 'label' => 'Aerospace', 'description' => 'Aerospace industry'],
        	['id' => '5' , 'name' => 'aircraft', 'label' => 'Aircraft', 'description' => 'Aircraft industry'],
        	['id' => '6' , 'name' => 'airline', 'label' => 'Airline', 'description' => 'Airline industry'],
        	['id' => '7' , 'name' => 'apparel_n_accessories', 'label' => 'Apparel & Accessories', 'description' => 'Apparel & Accessories industry'],
        	['id' => '8' , 'name' => 'automotive', 'label' => 'Automotive', 'description' => 'Automotive industry'],
        	['id' => '9' , 'name' => 'banking', 'label' => 'Banking', 'description' => 'Banking industry'],
        	['id' => '10', 'name' => 'broadcasting', 'label' => 'Broadcasting', 'description' => 'Broadcasting industry'],
        	['id' => '11', 'name' => 'brokerage', 'label' => 'brokerage', 'description' => 'brokerage industry'],
        	['id' => '12', 'name' => 'biotechnology', 'label' => 'Biotechnology', 'description' => 'Biotechnology industry'],
        	['id' => '13', 'name' => 'call_centers', 'label' => 'Call Centers', 'description' => 'Call Centers industry'],
        	['id' => '14', 'name' => 'cargo_handling', 'label' => 'Cargo Handling', 'description' => 'Cargo Handling industry'],
        	['id' => '15', 'name' => 'chemical', 'label' => 'Chemical', 'description' => 'Chemical industry'],
        	['id' => '16', 'name' => 'computer', 'label' => 'Computer', 'description' => 'Computer industry'],
        	['id' => '17', 'name' => 'consulting', 'label' => 'Consulting', 'description' => 'Consulting industry'],
        	['id' => '18', 'name' => 'consumer Products', 'label' => 'Consumer Products', 'description' => 'Consumer Products industry'],
        	['id' => '19', 'name' => 'cosmetics', 'label' => 'Cosmetics', 'description' => 'Cosmetics industry'],
        	['id' => '20', 'name' => 'defense', 'label' => 'Defense', 'description' => 'Defense industry'],
        	['id' => '21', 'name' => 'department_stores', 'label' => 'Department Stores', 'description' => 'Department Stores industry'],
        	['id' => '22', 'name' => 'education', 'label' => 'Education', 'description' => 'Education industry'],
        	['id' => '23', 'name' => 'electronics', 'label' => 'Electronics', 'description' => 'Electronics industry'],
        	['id' => '24', 'name' => 'energy', 'label' => 'Energy', 'description' => 'Energy industry'],
        	['id' => '25', 'name' => 'entertainment_n_leisure', 'label' => 'Entertainment & Leisure', 'description' => 'Entertainment & Leisure industry'],
        	['id' => '26', 'name' => 'executive_search', 'label' => 'Executive Search', 'description' => 'Executive Search industry'],
        	['id' => '27', 'name' => 'financial_services', 'label' => 'Financial Services', 'description' => 'Financial Services industry'],
        	['id' => '28', 'name' => 'Food_beverage_n_tobacco', 'label' => 'Food, Beverage & Tobacco', 'description' => 'Food, Beverage & Tobacco industry'],
        	['id' => '29', 'name' => 'grocery', 'label' => 'Grocery', 'description' => 'Grocery industry'],
        	['id' => '30', 'name' => 'health_care', 'label' => 'Health Care', 'description' => 'Health Care industry'],
        	['id' => '31', 'name' => 'internet_publishing', 'label' => 'Internet Publishing', 'description' => 'Internet Publishing industry'],
        	['id' => '32', 'name' => 'investment_banking', 'label' => 'Investment Banking', 'description' => 'Investment Banking industry'],
        	['id' => '33', 'name' => 'legal', 'label' => 'Legal', 'description' => 'Legal industry'],
        	['id' => '34', 'name' => 'manufacturing', 'label' => 'Manufacturing', 'description' => 'Manufacturing industry'],
        	['id' => '35', 'name' => 'motion_picture_n_video', 'label' => 'Motion Picture & Video', 'description' => 'Motion Picture & Video industry'],
        	['id' => '36', 'name' => 'music', 'label' => 'Music', 'description' => 'Music industry'],
        	['id' => '37', 'name' => 'newspaper_publishers', 'label' => 'Newspaper Publishers', 'description' => 'Newspaper Publishers industry'],
        	['id' => '38', 'name' => 'online_auctions', 'label' => 'Online Auctions', 'description' => 'Online Auctions industry'],
        	['id' => '39', 'name' => 'pension_funds', 'label' => 'Pension Funds', 'description' => 'Pension Funds industry'],
        	['id' => '40', 'name' => 'pharmaceuticals', 'label' => 'Pharmaceuticals', 'description' => 'Pharmaceuticals industry'],
        	['id' => '41', 'name' => 'private_equity', 'label' => 'Private Equity', 'description' => 'Private Equity industry'],
        	['id' => '42', 'name' => 'publishing', 'label' => 'Publishing', 'description' => 'Publishing industry'],
        	['id' => '43', 'name' => 'real_estate', 'label' => 'Real Estate', 'description' => 'Real Estate industry'],
        	['id' => '44', 'name' => 'retail_n_wholesale', 'label' => 'Retail & Wholesale', 'description' => 'Retail & Wholesale industry'],
        	['id' => '45', 'name' => 'securities_n_commodity_exchanges', 'label' => 'Securities & Commodity Exchanges', 'description' => 'Securities & Commodity Exchanges industry'],
        	['id' => '46', 'name' => 'service', 'label' => 'Service', 'description' => 'Service industry'],
        	['id' => '47', 'name' => 'soap_n_detergent', 'label' => 'Soap & Detergent', 'description' => 'Soap & Detergent industry'],
        	['id' => '48', 'name' => 'software', 'label' => 'Software', 'description' => 'Software industry'],
        	['id' => '49', 'name' => 'sports', 'label' => 'Sports', 'description' => 'Sports industry'],
        	['id' => '50', 'name' => 'technology', 'label' => 'Technology', 'description' => 'Technology industry'],
        	['id' => '51', 'name' => 'telecommunications', 'label' => 'Telecommunications', 'description' => 'Telecommunications industry'],
        	['id' => '52', 'name' => 'television', 'label' => 'Television', 'description' => 'Television industry'],
        	['id' => '53', 'name' => 'transportation', 'label' => 'Transportation', 'description' => 'Transportation industry'],
        	['id' => '54', 'name' => 'trucking', 'label' => 'Trucking', 'description' => 'Trucking industry'],
        	['id' => '55', 'name' => 'venture_capital', 'label' => 'Venture Capital', 'description' => 'Venture Capital industry'],
        ];

        \DB::table('fields')->insert($fields);

        //Get all of the countries
        $countries = \Countries::getList();
        foreach ($countries as $countryId => $country){
            \DB::table('countries')->insert(array(
                'id' => $countryId,
                'capital' => ((isset($country['capital'])) ? $country['capital'] : null),
                'citizenship' => ((isset($country['citizenship'])) ? $country['citizenship'] : null),
                'country_code' => $country['country-code'],
                'currency' => ((isset($country['currency'])) ? $country['currency'] : null),
                'currency_code' => ((isset($country['currency_code'])) ? $country['currency_code'] : null),
                'currency_sub_unit' => ((isset($country['currency_sub_unit'])) ? $country['currency_sub_unit'] : null),
                'full_name' => ((isset($country['full_name'])) ? $country['full_name'] : null),
                'iso_3166_2' => $country['iso_3166_2'],
                'iso_3166_3' => $country['iso_3166_3'],
                'name' => $country['name'],
                'region_code' => $country['region-code'],
                'sub_region_code' => $country['sub-region-code'],
                'eea' => (bool)$country['eea'],
                'calling_code' => $country['calling_code'],
                'currency_symbol' => ((isset($country['currency_symbol'])) ? $country['currency_symbol'] : null),
                'flag' =>((isset($country['flag'])) ? $country['flag'] : null),
            ));
        }


	}

}