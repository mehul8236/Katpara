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
        \DB::table('states')->delete();
        \DB::table('fields')->delete();

        $this->updateFields();
        $this->updateCountries();
        $this->updateStates();
	}

	private function updateFields()
	{
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
	}

	private function updateCountries()
	{
		//Get all of the countries
        $countries = \Countries::getList();
        foreach ($countries as $countryId => $country){
            \DB::table('countries')->insert(array(
                'id' => $countryId,
                'country_code' => $country['country-code'],
                'currency' => ((isset($country['currency'])) ? $country['currency'] : null),
                'currency_code' => ((isset($country['currency_code'])) ? $country['currency_code'] : null),
                'full_name' => ((isset($country['full_name'])) ? $country['full_name'] : null),
                'iso_3166_2' => $country['iso_3166_2'],
                'iso_3166_3' => $country['iso_3166_3'],
                'name' => $country['name'],
                'calling_code' => $country['calling_code'],
                'currency_symbol' => ((isset($country['currency_symbol'])) ? $country['currency_symbol'] : null),
                'flag' =>((isset($country['flag'])) ? $country['flag'] : null),
            ));
        }
	}

	private function updateStates()
	{
		$us= \DB::table('countries')->where('name', 'United States')->first();
		$america_id = $us->id;

		$ca= \DB::table('countries')->where('name', 'Canada')->first();
		$canada_id = $ca->id;

		$au= \DB::table('countries')->where('name', 'Austria')->first();
		$australia_id = $au->id;

		$america = [
			[ 'id' => '1' , 'country_id' => $america_id, 'region_code' => 'AL', 'name' => 'Alabama'],
			[ 'id' => '2' , 'country_id' => $america_id, 'region_code' => 'AK', 'name' => 'Alaska'],
			[ 'id' => '3' , 'country_id' => $america_id, 'region_code' => 'AS', 'name' => 'American Samoa'],
			[ 'id' => '4' , 'country_id' => $america_id, 'region_code' => 'AZ', 'name' => 'Arizona'],
			[ 'id' => '5' , 'country_id' => $america_id, 'region_code' => 'AR', 'name' => 'Arkansas'],
			[ 'id' => '6' , 'country_id' => $america_id, 'region_code' => 'CA', 'name' => 'California'],
			[ 'id' => '7' , 'country_id' => $america_id, 'region_code' => 'CO', 'name' => 'Colorado'],
			[ 'id' => '8' , 'country_id' => $america_id, 'region_code' => 'CT', 'name' => 'Connecticut'],
			[ 'id' => '9' , 'country_id' => $america_id, 'region_code' => 'DE', 'name' => 'Delaware'],
			[ 'id' => '10', 'country_id' => $america_id, 'region_code' => 'DC', 'name' => 'District of Columbia'],
			[ 'id' => '11', 'country_id' => $america_id, 'region_code' => 'FM', 'name' => 'Federated States of Micronesia'],
			[ 'id' => '12', 'country_id' => $america_id, 'region_code' => 'FL', 'name' => 'Florida'],
			[ 'id' => '13', 'country_id' => $america_id, 'region_code' => 'GA', 'name' => 'Georgia'],
			[ 'id' => '14', 'country_id' => $america_id, 'region_code' => 'GU', 'name' => 'Guam'],
			[ 'id' => '15', 'country_id' => $america_id, 'region_code' => 'HI', 'name' => 'Hawaii'],
			[ 'id' => '16', 'country_id' => $america_id, 'region_code' => 'ID', 'name' => 'Idaho'],
			[ 'id' => '17', 'country_id' => $america_id, 'region_code' => 'IL', 'name' => 'Illinois'],
			[ 'id' => '18', 'country_id' => $america_id, 'region_code' => 'IN', 'name' => 'Indiana'],
			[ 'id' => '19', 'country_id' => $america_id, 'region_code' => 'IA', 'name' => 'Iowa'],
			[ 'id' => '20', 'country_id' => $america_id, 'region_code' => 'KS', 'name' => 'Kansas'],
			[ 'id' => '21', 'country_id' => $america_id, 'region_code' => 'KY', 'name' => 'Kentucky'],
			[ 'id' => '22', 'country_id' => $america_id, 'region_code' => 'LA', 'name' => 'Louisiana'],
			[ 'id' => '23', 'country_id' => $america_id, 'region_code' => 'ME', 'name' => 'Maine'],
			[ 'id' => '24', 'country_id' => $america_id, 'region_code' => 'MH', 'name' => 'Marshall Islands'],
			[ 'id' => '25', 'country_id' => $america_id, 'region_code' => 'MD', 'name' => 'Maryland'],
			[ 'id' => '26', 'country_id' => $america_id, 'region_code' => 'MA', 'name' => 'Massachusetts'],
			[ 'id' => '27', 'country_id' => $america_id, 'region_code' => 'MI', 'name' => 'Michigan'],
			[ 'id' => '28', 'country_id' => $america_id, 'region_code' => 'MN', 'name' => 'Minnesota'],
			[ 'id' => '29', 'country_id' => $america_id, 'region_code' => 'MS', 'name' => 'Mississippi'],
			[ 'id' => '30', 'country_id' => $america_id, 'region_code' => 'MO', 'name' => 'Missouri'],
			[ 'id' => '31', 'country_id' => $america_id, 'region_code' => 'MT', 'name' => 'Montana'],
			[ 'id' => '32', 'country_id' => $america_id, 'region_code' => 'NE', 'name' => 'Nebraska'],
			[ 'id' => '33', 'country_id' => $america_id, 'region_code' => 'NV', 'name' => 'Nevada'],
			[ 'id' => '34', 'country_id' => $america_id, 'region_code' => 'NH', 'name' => 'New Hampshire'],
			[ 'id' => '35', 'country_id' => $america_id, 'region_code' => 'NJ', 'name' => 'New Jersey'],
			[ 'id' => '36', 'country_id' => $america_id, 'region_code' => 'NM', 'name' => 'New Mexico'],
			[ 'id' => '37', 'country_id' => $america_id, 'region_code' => 'NY', 'name' => 'New York'],
			[ 'id' => '38', 'country_id' => $america_id, 'region_code' => 'NC', 'name' => 'North Carolina'],
			[ 'id' => '39', 'country_id' => $america_id, 'region_code' => 'ND', 'name' => 'North Dakota'],
			[ 'id' => '40', 'country_id' => $america_id, 'region_code' => 'MP', 'name' => 'Northern Mariana Islands'],
			[ 'id' => '41', 'country_id' => $america_id, 'region_code' => 'OH', 'name' => 'Ohio'],
			[ 'id' => '42', 'country_id' => $america_id, 'region_code' => 'OK', 'name' => 'Oklahoma'],
			[ 'id' => '43', 'country_id' => $america_id, 'region_code' => 'OR', 'name' => 'Oregon'],
			[ 'id' => '44', 'country_id' => $america_id, 'region_code' => 'PW', 'name' => 'Palau'],
			[ 'id' => '45', 'country_id' => $america_id, 'region_code' => 'PA', 'name' => 'Pennsylvania'],
			[ 'id' => '46', 'country_id' => $america_id, 'region_code' => 'PR', 'name' => 'Puerto Rico'],
			[ 'id' => '47', 'country_id' => $america_id, 'region_code' => 'RI', 'name' => 'Rhode Island'],
			[ 'id' => '48', 'country_id' => $america_id, 'region_code' => 'SC', 'name' => 'South Carolina'],
			[ 'id' => '49', 'country_id' => $america_id, 'region_code' => 'SD', 'name' => 'South Dakota'],
			[ 'id' => '50', 'country_id' => $america_id, 'region_code' => 'TN', 'name' => 'Tennessee'],
			[ 'id' => '51', 'country_id' => $america_id, 'region_code' => 'TX', 'name' => 'Texas'],
			[ 'id' => '52', 'country_id' => $america_id, 'region_code' => 'UT', 'name' => 'Utah'],
			[ 'id' => '53', 'country_id' => $america_id, 'region_code' => 'VT', 'name' => 'Vermont'],
			[ 'id' => '54', 'country_id' => $america_id, 'region_code' => 'VI', 'name' => 'Virgin Islands'],
			[ 'id' => '55', 'country_id' => $america_id, 'region_code' => 'VA', 'name' => 'Virginia'],
			[ 'id' => '56', 'country_id' => $america_id, 'region_code' => 'WA', 'name' => 'Washington'],
			[ 'id' => '57', 'country_id' => $america_id, 'region_code' => 'WV', 'name' => 'West Virginia'],
			[ 'id' => '58', 'country_id' => $america_id, 'region_code' => 'WI', 'name' => 'Wisconsin'],
			[ 'id' => '59', 'country_id' => $america_id, 'region_code' => 'WY', 'name' => 'Wyoming']
		];

		$canada = [
			[ 'id' => '60', 'country_id' => $canada_id, 'region_code' => 'AB', 'name' => 'Alberta'],
			[ 'id' => '61', 'country_id' => $canada_id, 'region_code' => 'BC', 'name' => 'British Columbia'],
			[ 'id' => '62', 'country_id' => $canada_id, 'region_code' => 'MB', 'name' => 'Manitoba'],
			[ 'id' => '63', 'country_id' => $canada_id, 'region_code' => 'NB', 'name' => 'New Brunswick'],
			[ 'id' => '64', 'country_id' => $canada_id, 'region_code' => 'NL', 'name' => 'Newfoundland and Labrador'],
			[ 'id' => '65', 'country_id' => $canada_id, 'region_code' => 'NS', 'name' => 'Nova Scotia'],
			[ 'id' => '66', 'country_id' => $canada_id, 'region_code' => 'ON', 'name' => 'Ontario'],
			[ 'id' => '67', 'country_id' => $canada_id, 'region_code' => 'PE', 'name' => 'Prince Edward Island'],
			[ 'id' => '68', 'country_id' => $canada_id, 'region_code' => 'QC', 'name' => 'Quebec'],
			[ 'id' => '69', 'country_id' => $canada_id, 'region_code' => 'SK', 'name' => 'Saskatchewan'],
			[ 'id' => '70', 'country_id' => $canada_id, 'region_code' => 'NT', 'name' => 'Northwest Territories'],
			[ 'id' => '71', 'country_id' => $canada_id, 'region_code' => 'NU', 'name' => 'Nunavut'],
			[ 'id' => '72', 'country_id' => $canada_id, 'region_code' => 'YT', 'name' => 'Yukon Territory']
		];

		$australia = [
			[ 'id' => '73', 'country_id' => $australia_id, 'region_code' => 'NSW', 'name' => 'New South Wales'],
			[ 'id' => '74', 'country_id' => $australia_id, 'region_code' => 'QLD', 'name' => 'Queensland'],
			[ 'id' => '75', 'country_id' => $australia_id, 'region_code' => 'SA', 'name' => 'South Australia'],
			[ 'id' => '76', 'country_id' => $australia_id, 'region_code' => 'TAS', 'name' => 'Tasmania'],
			[ 'id' => '77', 'country_id' => $australia_id, 'region_code' => 'VIC', 'name' => 'Victoria'],
			[ 'id' => '78', 'country_id' => $australia_id, 'region_code' => 'WA', 'name' => 'Western Australia'],
			[ 'id' => '79', 'country_id' => $australia_id, 'region_code' => 'ACT', 'name' => 'Capital Territory'],
			[ 'id' => '80', 'country_id' => $australia_id, 'region_code' => 'NT', 'name' => 'Northern Territory']
		];

		\DB::table('states')->insert($america);
		\DB::table('states')->insert($canada);
		\DB::table('states')->insert($australia);

	}
}