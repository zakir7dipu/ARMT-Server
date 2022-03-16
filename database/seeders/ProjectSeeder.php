<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'icon' => null,
                'bg_color' => null,
                'image' => '/upload/projects/hospital.png',
                'title' => 'A Haven of Health for Those in Need',
                'sub_title' => 'A clean bill of health is all that most of us ask for',
                'description' => "<p>A clean bill of health is all that most of us ask for, yet few of us get. Illnesses, conditions, and accidents are part and parcel of life, and when they strike, one can only hope that medical care is accessible.</p>

                <p>In the remote village of Patdal, which falls under Bhumkhara union of Naria upazila in Shariatpur, there is no such care available. In order to seek even the most basic medical attention, residents of this remote village have to travel a very long way to reach even the closest hospital. As things stand, it is especially difficult for children, pregnant women, and the elderly to avail medical care without a great delay and a painstaking journey.</p>

                <p>However, there is a project under way that could see a hospital built right in Patdal. Featuring a wide array of facilities, this hospital could be the answer to the prayers of the caring, hardworking people of this small village. </p>

                <p>The proposed project for this hospital has been named the “Abdur Rahim Memorial Hospital,” and it has been slated to feature both certain designated areas upon the premises and a number of important services.</p>

                <h5>Infrastructural Facilities</h5>

                <p>Like any healthcare facility, the ARMH will have a reception area where patients will be guided to other areas of the premises. </p>

                <p>The hospital will, importantly, have an emergency care center with a doctor and nurses at the ready. </p>

                <p>Doctors will also have their own chambers, while a waiting room will be built so that any staff member or patient can wait or rest. There will also be clean toilets available for all to use.</p>

                <p>A collection counter for blood and other samples will make the compartmentalization of hospital procedures easier, and lastly, an on-site pharmacy will ensure that patients readily have access to whatever medicines they require.</p>




                <h5>Offered Services</h5>

                <p>One of the biggest predicaments faced by patients outside of cities is a lack of ambulances. ARMH plans to address this with a 24/7 ambulance service. This will be further bolstered by the constant presence of a well-trained doctor no matter what the hour. </p>

                <p>For those facing more complicated issues, weekly visits from specialists will be scheduled to address all kinds of conditions and illnesses. </p>

                <p>In order to maintain healthy lives for the residents of the village, basic tests such as blood group, blood sugar, and diabetes will be available at the hospital. The health center will also be equipped to carry out procedures such as circumcision, and have trained personnel who can carry out basic stitching and bandaging. Other services such as vaccination and family planning sessions will also be available.</p>

                <p>Should a patient arrive in or deteriorate to a condition which goes beyond the treatment limits of the hospital, there will be facilities to transport them to the Upazila Health Complex or even hospitals in Dhaka.</p>

                <h5>Future Improvements</h5>

                <p>The aforementioned facilities are only the proposed initial attributes of the hospital, and there are many upgrades planned. These include converting the hospital to a 10-bed facility, employing trained doctors who can perform more complex operations such as C-Sections, adding ECG and X-ray facilities, a larger pathological lab with disease detection capabilities, and providing blood transfusion services.</p>

                <p>Of the 1 Crore 15 Lakh estimated budget, roughly Tk 6,775,000 has been raised, with another TK 4,725,000 required. Should this requirement be met, the lives of not only the people of Patdal, but also those living in villages nearby will be transformed.</p>
                "
            ],
            [
                'icon' => null,
                'bg_color' => null,
                'image' => '/upload/projects/water.png',
                'title' => 'The Quest to Provide Safe Drinking Water for All - Water Project!',
                'sub_title' => 'The human being needs several gallons of water',
                'description' => "<p>The world may have marched into the 21st century with plenty of economic, cultural, and technological advancements, but there continue to be areas of the planet which still lack the most basic of resources or amenities. There are still entire regions that lack a supply of one of the most vital elements required for life to survive — water. </p>

                <p>While the average human being needs several gallons of water per day to lead what is considered a normal life, it is important for at least 2-3 liters of that to be clean, safe, adulterant-free drinkable water. If a person does not have access to this, they run the risk of dehydration, electrolyte imbalance, and developing kidney problems such as stones or outright failure. At the same time, they may try to quench their thirst using unclean or unsafe water, which may lead to deadly diseases such as cholera, diarrhea, and dysentery.</p>

                <p>However, this can be extremely difficult to get in remote areas of underdeveloped or developing countries, and Bangladesh is one such country. Roughly 10% of the nearly 170-million-strong population do not have a source of clean water available to them.</p>

                <p>The plight of this group of people — who can be found in almost all parts of the country — is as extreme as it is unfortunate, with some people having to walk many kilometers to and from a source of clean water, with the weight of the water adding to the difficulty of the task on the way back. </p>

                <p>Alternatively, other families have to pay exorbitant amounts to exploitative groups which only allow these marginalized people to use their deep-bore tube wells and pumps for a price, leveraging their need for this basic resource to make money. In many cases, some of these families are forced to pay such sums despite making a paltry living as they do not have anyone able enough to make a regular journey to acquire water.</p>

                <p>In such dire circumstances, the Abdur Rahim Memorial Trust has come forward to stand by such groups. Using their own resources, the Trust has set up pumps, tube wells, pipes, and tanks for anyone and everyone to use. In order to maintain absolute neutrality, the Trust had most of these watering stations built inside the perimeters of mosques, where they are beyond the reach of the ill-intent of any influential locals. Along with extensive plumbing facilities (some of which include tube wells as deep as 280 feet), the organization has also built oju khanas — separate areas for Muslims to cleanse themselves before prayer — for some of the mosques.</p> "
            ],
            [
                'icon' => null,
                'bg_color' => null,
                'image' => '/upload/projects/huminity.png',
                'title' => 'SSG for Humanity',
                'sub_title' => 'During the pandemic, people from every class suffered',
                'description' => "<p>During the pandemic, people from every class suffered a lot. Especially the poor underprivileged people suffered from the food crisis. In this dire situation, Super Star Group the patron of ARMT decided to come forward and share the same food that they provide for their regular employees. This initiative still continues and every month from SSG a great amount of food is distributed to the poor underprivileged people of the society.</p>
                <p>Super Star Group the patron of ARMT always works for the wellbeing of underprivileged people of the society. And in the future, it has a plan to make this happen on a very large scale. </p> "
            ],
        ];

//        Project::truncate();
        Project::insert($projects);
    }
}
