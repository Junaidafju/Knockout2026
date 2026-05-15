<?php
/**
 * Template Name: Careers - Liquid & Lounge
 * Description: Careers page for The Knockout Sports Bar - Liquid & Lounge Theme
 */
get_header();

/* ============================================================
   ★ JOB POSTINGS — Edit this array to add / remove jobs
   ============================================================ */
$ko_jobs = [
    /* ── MANAGEMENT ── */
    [
        'id' => 'operations-manager',
        'title' => 'Operations Manager',
        'dept' => 'Management',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 1,
        'summary' => 'Oversee daily operations across service, kitchen, gaming, housekeeping and guest experience teams.',
        'about' => 'We need a sharp, hands-on Operations Manager to lead all departments of The Knockout — ensuring every shift runs like clockwork and every guest leaves impressed. You will set the standard for service excellence and operational efficiency.',
        'duties' => ['Oversee day-to-day floor and back-of-house operations', 'Coordinate between service, kitchen, gaming and housekeeping teams', 'Implement and monitor SOPs across all departments', 'Handle vendor management, scheduling and reporting', 'Drive guest satisfaction and resolve escalations', 'Lead shift briefings and performance reviews'],
        'require' => ['5–10 years in hospitality, sports bars, lounges or restaurants', 'Proven team management and SOP implementation skills', 'Strong leadership, vendor management and reporting ability', 'Ability to thrive under pressure in a high-energy venue']
    ],

    [
        'id' => 'asst-operations-manager',
        'title' => 'Assistant Operations Manager',
        'dept' => 'Management',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 1,
        'summary' => 'Support the Operations Manager in running smooth day-to-day floor operations.',
        'about' => 'You are a reliable second-in-command who keeps every shift moving. You will support the Operations Manager in coordinating teams, managing inventory, solving problems on the floor and delivering service excellence at every touchpoint.',
        'duties' => ['Assist in coordinating service, kitchen and support teams', 'Handle customer service escalations on the floor', 'Monitor inventory and stock levels', 'Conduct daily floor checks and team briefings', 'Support recruitment and training of new staff'],
        'require' => ['3–6 years in hospitality operations', 'Strong team coordination and communication skills', 'Customer service focus and problem-solving ability', 'Experience with inventory handling preferred']
    ],

    [
        'id' => 'duty-manager',
        'title' => 'Duty Manager',
        'dept' => 'Management',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 2,
        'summary' => 'Manage assigned shifts, handle guest escalations and keep operations running flawlessly.',
        'about' => 'As Duty Manager you own your shift from start to finish. You handle guest concerns, keep the team motivated, manage floor supervision and respond quickly to any operational challenges that arise during service.',
        'duties' => ['Supervise floor operations during assigned shifts', 'Manage customer escalations and ensure guest satisfaction', 'Conduct opening and closing procedures', 'Monitor team performance and service standards', 'Report shift incidents and operational updates to management'],
        'require' => ['3–5 years in hospitality, nightlife or F&B', 'Strong guest handling and floor supervision skills', 'Ability to multitask and handle crisis situations', 'Flexible with evening, weekend and match-night shifts']
    ],

    /* ── F&B SERVICE ── */
    [
        'id' => 'restaurant-captain',
        'title' => 'Restaurant Captain',
        'dept' => 'F&B Service',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 2,
        'summary' => 'Lead the service team and ensure every guest has an exceptional dining experience.',
        'about' => 'You are the engine of the floor — leading stewards, managing order flow and making sure every table feels looked after. You know the menu inside out and can upsell naturally while keeping service standards high during peak hours.',
        'duties' => ['Lead service team during operations', 'Manage order flow and coordinate with kitchen', 'Train and guide stewards and junior service staff', 'Handle guest queries, complaints and special requests', 'Ensure POS accuracy and end-of-shift reporting'],
        'require' => ['2–5 years in restaurants, pubs, lounges or hotels', 'Team supervision and upselling experience', 'POS system knowledge', 'Strong customer interaction and communication skills']
    ],

    [
        'id' => 'steward',
        'title' => 'Senior Steward / Steward',
        'dept' => 'F&B Service',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 6,
        'summary' => 'Serve food and beverages with warmth and precision while maintaining high service standards.',
        'about' => 'You are the face of hospitality at every table. Whether you are taking orders, delivering food or simply checking in on a guest, you do it with a smile and a sharp eye for detail. Freshers are welcome for the Steward role.',
        'duties' => ['Take and serve food and beverage orders accurately', 'Maintain cleanliness and presentation of dining areas', 'Assist guests with menu queries and recommendations', 'Support teammates during high-volume service', 'Follow hygiene and grooming standards at all times'],
        'require' => ['1–3 years preferred (freshers considered for Steward)', 'Good communication skills and grooming', 'Menu knowledge and teamwork', 'Customer service orientation']
    ],

    [
        'id' => 'bartender',
        'title' => 'Bartender / Flair Bartender',
        'dept' => 'Bar',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 3,
        'summary' => 'Craft and serve outstanding beverages while delivering an engaging guest experience behind the bar.',
        'about' => 'At The Knockout bar, you are the star of the show. You prepare everything from classic cocktails to custom creations, keep the bar spotless and build a genuine connection with every guest who walks up. Flair bartenders especially welcome.',
        'duties' => ['Prepare cocktails, mocktails and beverages to spec', 'Engage guests and deliver a memorable bar experience', 'Maintain a clean and fully stocked bar station', 'Upsell drinks and promotions naturally', 'Follow hygiene and licensing standards at all times'],
        'require' => ['2–5 years in bars, lounges or nightclubs', 'Mixology and beverage knowledge', 'Customer engagement and speed under pressure', 'Flair bartending skills are a strong plus']
    ],

    [
        'id' => 'bar-supervisor',
        'title' => 'Bar Supervisor',
        'dept' => 'Bar',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 1,
        'summary' => 'Manage bar inventory, scheduling, beverage quality and customer satisfaction.',
        'about' => 'You run the bar team with authority and craft. Overseeing inventory, guiding bartenders, coordinating with vendors and keeping quality consistent — you ensure every drink that leaves the bar is exactly right, especially on big match nights.',
        'duties' => ['Manage bar inventory, stock ordering and vendor coordination', 'Supervise and schedule bartenders', 'Ensure beverage quality and presentation standards', 'Handle customer feedback and bar-side escalations', 'Conduct bar briefings and staff training sessions'],
        'require' => ['3–6 years in bar operations or nightlife', 'Mixology expertise and inventory management skills', 'Leadership and vendor coordination ability', 'Strong guest engagement skills']
    ],

    /* ── GUEST RELATIONS ── */
    [
        'id' => 'gre',
        'title' => 'Guest Relations Executive',
        'dept' => 'Guest Relations',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 2,
        'summary' => 'Welcome guests, manage reservations and ensure every visit exceeds expectations.',
        'about' => 'You are the first real impression of The Knockout. Your warmth, presentation and quick thinking set the tone for every guest visit. From managing reservations to resolving queries, you ensure every interaction is seamless and exceptional.',
        'duties' => ['Greet and welcome guests warmly on arrival', 'Manage table reservations and seating plans', 'Handle guest queries, special requests and complaints', 'Coordinate with floor team for smooth guest flow', 'Maintain reservation system records and reports'],
        'require' => ['1–4 years in hospitality, aviation, retail or luxury services', 'Excellent communication and presentation skills', 'Experience with reservation or CRM systems preferred', 'Strong customer handling and interpersonal ability']
    ],

    [
        'id' => 'hostess',
        'title' => 'Hostess / Front Desk Executive',
        'dept' => 'Guest Relations',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 3,
        'summary' => 'Be the first point of contact for guests and manage seamless seating coordination.',
        'about' => 'You own the front of house. As the first face guests see at The Knockout, your grooming, smile and communication skill set the stage for everything that follows. Freshers with the right personality are very welcome to apply.',
        'duties' => ['Greet incoming guests and manage entry coordination', 'Coordinate seating arrangements with the floor team', 'Manage waitlists and communicate wait times accurately', 'Handle basic guest queries and direct them appropriately', 'Maintain front desk appearance and records'],
        'require' => ['Freshers and experienced candidates welcome', 'Outstanding grooming and interpersonal skills', 'Confident communication and a warm, welcoming personality', 'Ability to stay calm and professional during busy shifts']
    ],

    [
        'id' => 'reservation-exec',
        'title' => 'Reservation Executive',
        'dept' => 'Guest Relations',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 1,
        'summary' => 'Handle table bookings, event reservations and guest coordination with precision.',
        'about' => 'You are the backbone of The Knockout\'s booking operations. From daily table reservations to large event bookings, you keep everything organised, confirm details with guests and ensure the floor team is always prepared for what\'s coming.',
        'duties' => ['Manage inbound reservation requests across phone, WhatsApp and online channels', 'Confirm bookings and communicate with guests pre-visit', 'Coordinate large group and event reservations with the ops team', 'Maintain accurate records in the CRM or POS system', 'Handle rescheduling, cancellations and waitlist management'],
        'require' => ['1–3 years in a reservation, front office or coordination role', 'CRM or POS system experience preferred', 'Strong customer communication and coordination skills', 'Detail-oriented with excellent follow-through']
    ],

    /* ── KITCHEN ── */
    [
        'id' => 'cdp',
        'title' => 'CDP (Chef de Partie)',
        'dept' => 'Kitchen',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 3,
        'summary' => 'Lead your kitchen section — Continental, Indian, Oriental, Grill or Snacks — with expertise and precision.',
        'about' => 'As Chef de Partie, you own your section. You are responsible for consistency, presentation and hygiene in everything that comes off your station. You work closely with the Head Chef to maintain quality and pace even during high-volume service.',
        'duties' => ['Manage and execute production for assigned kitchen section', 'Ensure consistency, quality and hygiene at your station', 'Supervise commis chefs and kitchen helpers under you', 'Maintain mise en place and prep standards', 'Report stock requirements and wastage to senior chef'],
        'require' => ['2–5 years in a hotel, restaurant or lounge kitchen', 'Section expertise in Continental, Indian, Oriental, Grill or Snacks', 'Strong plating, hygiene standards and consistency', 'FSSAI awareness preferred']
    ],

    [
        'id' => 'commis-chef',
        'title' => 'Commis Chef',
        'dept' => 'Kitchen',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 4,
        'summary' => 'Support food preparation and kitchen operations under the guidance of senior chefs.',
        'about' => 'This is where great chefs begin. As a Commis Chef at The Knockout you will learn, grow and contribute to a high-energy kitchen environment. You will assist CDPs with prep, portioning and plating while building your core culinary skills.',
        'duties' => ['Assist senior chefs with food preparation and mise en place', 'Follow recipes and plating standards as directed', 'Maintain cleanliness of your workstation at all times', 'Support section chefs during peak service periods', 'Learn and develop culinary skills on the job'],
        'require' => ['Freshers to 2 years of experience welcome', 'Basic culinary skills or hotel management background', 'Discipline, teamwork and willingness to learn', 'Physical stamina for long kitchen shifts']
    ],

    [
        'id' => 'kitchen-helper',
        'title' => 'Kitchen Helper / Utility Staff',
        'dept' => 'Kitchen',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 4,
        'summary' => 'Support kitchen cleaning, preparation and maintenance so the team can focus on the food.',
        'about' => 'The unsung heroes of every great kitchen. Kitchen Helpers keep the environment spotless, ensure supplies are stocked and support the team with basic prep tasks. Freshers are welcome — discipline and a willingness to work hard is all you need.',
        'duties' => ['Clean and sanitise kitchen equipment, surfaces and utensils', 'Assist with basic vegetable and ingredient preparation', 'Manage dishwashing and kitchen waste disposal', 'Ensure timely restocking of kitchen supplies', 'Support CDPs and commis chefs as directed'],
        'require' => ['Freshers can apply', 'Basic hygiene awareness and discipline', 'Physical stamina and teamwork', 'Willingness to work kitchen hours including evenings and weekends']
    ],

    /* ── GAMING & ENTERTAINMENT ── */
    [
        'id' => 'gaming-exec',
        'title' => 'Gaming Zone Executive',
        'dept' => 'Entertainment',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 3,
        'summary' => 'Assist guests in gaming activities and keep the gaming zone energetic and fully operational.',
        'about' => 'You are the energy in the gaming zone. You guide guests through activities, ensure all equipment is running smoothly and create an engaging, fun environment that keeps people coming back. You love entertainment and thrive in lively spaces.',
        'duties' => ['Assist guests in using gaming equipment and attractions', 'Monitor gaming zone operations and report malfunctions', 'Ensure a safe, fun and welcoming environment for all guests', 'Handle basic troubleshooting and equipment checks', 'Support events and gaming tournaments in the venue'],
        'require' => ['1–3 years in gaming zones, entertainment centres or hospitality', 'Strong customer interaction and enthusiasm', 'Basic technical understanding and troubleshooting ability', 'Energetic, engaging personality']
    ],

    [
        'id' => 'gaming-supervisor',
        'title' => 'Gaming Zone Supervisor',
        'dept' => 'Entertainment',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 1,
        'summary' => 'Oversee gaming operations, machine maintenance coordination and guest engagement.',
        'about' => 'As Gaming Zone Supervisor you ensure the entire gaming area operates at its best — from coordinating maintenance to managing the gaming team and driving guest satisfaction. You understand both the technical and hospitality sides of the role.',
        'duties' => ['Supervise gaming zone staff and daily operations', 'Coordinate with maintenance for equipment servicing', 'Monitor guest engagement and satisfaction in the zone', 'Plan and execute gaming tournaments and in-venue competitions', 'Report performance metrics and suggest improvements'],
        'require' => ['3–5 years in entertainment, gaming or hospitality', 'Team handling and technical coordination skills', 'Strong guest engagement ability', 'Experience managing gaming or entertainment operations preferred']
    ],

    [
        'id' => 'event-coordinator',
        'title' => 'Event & Entertainment Coordinator',
        'dept' => 'Entertainment',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 1,
        'summary' => 'Plan and execute sports screenings, DJ nights, live events, tournaments and promotions.',
        'about' => 'You are the creative force behind The Knockout\'s event calendar. From IPL screening setups to DJ nights and corporate bookings, you own the planning and execution of every event. You are organised, creative and thrive in high-energy live environments.',
        'duties' => ['Plan, coordinate and execute all venue events end-to-end', 'Manage vendor bookings including AV, décor and performers', 'Build and maintain the event promotion calendar', 'Coordinate with kitchen, bar and floor teams for event readiness', 'Track event performance and produce post-event reports'],
        'require' => ['2–5 years in events, nightlife or hospitality', 'Strong event planning and vendor coordination skills', 'Creative mindset with social media and promotional awareness', 'Ability to manage multiple events simultaneously']
    ],

    /* ── HOUSEKEEPING & MAINTENANCE ── */
    [
        'id' => 'hk-supervisor',
        'title' => 'Housekeeping Supervisor',
        'dept' => 'Housekeeping',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 1,
        'summary' => 'Ensure spotless cleanliness and hygiene standards across all guest areas, washrooms and kitchens.',
        'about' => 'Cleanliness is a core part of the guest experience at The Knockout. As Housekeeping Supervisor you lead the cleaning team, maintain high standards and ensure every area of the venue is immaculate before, during and after operations.',
        'duties' => ['Supervise housekeeping team and assign daily duties', 'Conduct regular inspections of guest areas, washrooms and back-of-house', 'Manage cleaning supplies and inventory', 'Ensure compliance with hygiene and sanitation standards', 'Coordinate with operations team for event setup cleaning needs'],
        'require' => ['2–5 years in hotel, lounge or venue housekeeping', 'Team supervision and hygiene management experience', 'Strong attention to detail and scheduling ability', 'Knowledge of FSSAI and venue hygiene standards']
    ],

    [
        'id' => 'hk-associate',
        'title' => 'Housekeeping Associate',
        'dept' => 'Housekeeping',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 4,
        'summary' => 'Maintain the cleanliness and presentation standards across all areas of the venue.',
        'about' => 'You take pride in a spotless environment. As a Housekeeping Associate you are responsible for cleaning and maintaining guest areas, washrooms and common spaces throughout the day and night. Freshers with a disciplined attitude are welcome.',
        'duties' => ['Clean and maintain guest areas, washrooms and common zones', 'Replenish consumables such as tissue, soap and hand sanitiser', 'Report maintenance issues or damage to the supervisor', 'Support setup and post-event cleaning', 'Follow venue hygiene protocols and waste disposal procedures'],
        'require' => ['Freshers and experienced candidates welcome', 'Attention to detail and cleanliness standards', 'Disciplined and physically fit', 'Ability to work day and evening shifts']
    ],

    [
        'id' => 'maintenance-tech',
        'title' => 'Maintenance Technician',
        'dept' => 'Maintenance',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 2,
        'summary' => 'Handle electrical, plumbing, HVAC and general equipment maintenance across the venue.',
        'about' => 'You keep The Knockout running. From fixing a faulty light to resolving HVAC issues before a big match night, you handle all maintenance and repair tasks quickly and professionally to minimise any disruption to operations and guest experience.',
        'duties' => ['Perform routine and preventive maintenance checks', 'Handle electrical, plumbing and HVAC repairs', 'Respond quickly to maintenance requests during operations', 'Maintain equipment records and maintenance logs', 'Coordinate with external technicians for specialist repairs'],
        'require' => ['2–6 years in facilities or venue maintenance', 'Technical skills in electrical, plumbing or HVAC systems', 'Preventive maintenance and troubleshooting ability', 'Flexible with shift timings including evenings and weekends']
    ],

    [
        'id' => 'purchase-exec',
        'title' => 'Purchase & Inventory Executive',
        'dept' => 'Procurement',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 1,
        'summary' => 'Manage procurement, stock control, vendor coordination and inventory tracking across the venue.',
        'about' => 'You are the control centre for everything that comes in and goes out of The Knockout. From placing purchase orders to tracking stock levels and coordinating with vendors, you keep the supply chain running and prevent shortages during peak operations.',
        'duties' => ['Raise and manage purchase orders across all departments', 'Maintain accurate stock records and conduct regular audits', 'Coordinate with vendors for timely delivery and quality checks', 'Monitor consumption patterns and flag low-stock situations', 'Prepare purchase reports and assist with budget planning'],
        'require' => ['2–5 years in procurement, inventory or supply chain', 'Experience with stock management systems preferred', 'Strong vendor coordination and negotiation skills', 'Analytical mindset with attention to detail']
    ],

    /* ── SECURITY ── */
    [
        'id' => 'security-supervisor',
        'title' => 'Security Supervisor',
        'dept' => 'Security',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 1,
        'summary' => 'Ensure guest safety, crowd management and security coordination during all operations and events.',
        'about' => 'You maintain a safe and welcoming environment at The Knockout. Leading the security team, you manage crowd flow, handle sensitive situations discreetly and coordinate with management during high-volume events and match nights.',
        'duties' => ['Supervise security team across all entry and operational zones', 'Manage crowd control during events and match nights', 'Coordinate with management for security briefings and protocols', 'Handle guest disputes and sensitive situations professionally', 'Monitor CCTV and report incidents'],
        'require' => ['3–6 years in venue, hotel or event security', 'Crowd management and emergency response experience', 'Strong leadership, vigilance and professionalism', 'Ability to remain calm in high-pressure situations']
    ],

    [
        'id' => 'security-bouncer',
        'title' => 'Security / Bouncer',
        'dept' => 'Security',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 4,
        'summary' => 'Monitor entry, guest screening and venue safety to maintain a secure environment for all.',
        'about' => 'You are the first line of safety at The Knockout. Your presence is professional, your judgement is sharp and your approach is firm but respectful. You ensure every guest entry is smooth and the venue remains safe for guests and staff alike.',
        'duties' => ['Man entry points and conduct guest screening', 'Monitor venue for any security concerns or misconduct', 'Coordinate with the security supervisor during events', 'Handle access control for VIP and restricted areas', 'Respond to incidents promptly and report to management'],
        'require' => ['Prior security or bouncer experience preferred', 'Physically fit with a disciplined and alert demeanour', 'Professional communication and conflict resolution skills', 'Male and female candidates welcome']
    ],

    /* ── HOOKAH ── */
    [
        'id' => 'hookah-specialist',
        'title' => 'Hookah Specialist (Shisha Expert)',
        'dept' => 'Hookah',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 3,
        'summary' => 'Prepare and serve premium hookah while delivering an exceptional guest experience.',
        'about' => 'You are the hookah expert at The Knockout. From setting up and packing to managing heat and flavour, you deliver a consistently exceptional shisha experience. You know your flavours, your guests and your craft inside out.',
        'duties' => ['Prepare and serve hookah setups to the highest standards', 'Manage coal, heat and flavour combinations for each guest', 'Upsell flavours and add-ons naturally during service', 'Maintain hookah equipment in clean, working condition', 'Follow hygiene and safety protocols at all times'],
        'require' => ['1–4 years in lounges, cafes or clubs offering hookah services', 'Knowledge of setup, flavors, heat management and maintenance', 'Customer interaction and upselling abilities', 'Hygiene awareness and consistency under pressure']
    ],

    [
        'id' => 'hookah-supervisor',
        'title' => 'Senior Hookah Specialist / Hookah Supervisor',
        'dept' => 'Hookah',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 1,
        'summary' => 'Lead hookah service operations, manage inventory and ensure quality across all service points.',
        'about' => 'As Senior Hookah Specialist you run the hookah operation at The Knockout end-to-end. You train junior staff, manage flavour and accessory inventory, maintain quality across the floor and handle special guest requests with authority and craft.',
        'duties' => ['Oversee hookah service quality across the entire venue', 'Train and guide junior hookah specialists', 'Manage inventory of flavours, coal and accessories', 'Ensure compliance with local regulations and safety norms', 'Handle guest complaints and special requests regarding hookah service', 'Coordinate with vendors for hookah supplies'],
        'require' => ['3–6 years in premium lounges or nightclubs', 'Advanced knowledge of hookah techniques and flavor mixing', 'Inventory and stock management experience', 'Team supervision and training ability', 'Strong guest engagement and service recovery skills']
    ],

    [
        'id' => 'hookah-assistant',
        'title' => 'Hookah Assistant / Trainee',
        'dept' => 'Hookah',
        'type' => 'Full-time',
        'location' => 'Kolkata, WB',
        'openings' => 2,
        'summary' => 'Support the hookah team with preparation, cleaning and service operations.',
        'about' => 'You are at the start of your hookah service journey. Under the guidance of our Hookah Specialists, you will learn the craft from the ground up — cleaning equipment, preparing setups, managing stock readiness and supporting the team during peak hours.',
        'duties' => ['Assist in cleaning and assembling hookah setups', 'Support specialists during busy service periods', 'Maintain stock readiness for flavours, coal and accessories', 'Keep the hookah service area clean and organised', 'Learn and develop hookah preparation skills on the job'],
        'require' => ['Freshers or up to 1 year of experience welcome', 'Willingness to learn and take direction', 'Basic hygiene understanding', 'Teamwork, discipline and a positive attitude']
    ],
];


/* WhatsApp number — change to the correct number with country code, no + or spaces */
$ko_whatsapp = '919830662244';
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Alpaca&display=swap');

    :root {
        --green-primary: #afd135;
        --green-dark: #96b623ff;
        --green-glow: rgba(169, 230, 0, 0.62);
        --green-subtle: rgba(0, 230, 118, 0.08);
        --bg-obsidian: #0A0A0A;
        --bg-charcoal: #121212;
        --bg-card: #1A1A1A;
        --text-white: #FFFFFF;
        --text-muted: #B0B0B0;
        --ease: cubic-bezier(0.22, 1, 0.36, 1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .liquid-careers {
        font-family: 'Alpaca', 'Segoe UI', sans-serif;
        background: var(--bg-obsidian);
        color: var(--text-white);
        overflow-x: hidden;
        -webkit-font-smoothing: antialiased;
    }

    .liquid-careers a {
        text-decoration: none;
        color: inherit;
    }

    .liquid-careers ul {
        list-style: none;
    }

    .liquid-careers img {
        display: block;
        max-width: 100%;
    }

    /* ========== TRANSITION UTILITIES ========== */
    .fade-in-section {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .fade-in-section.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .slide-left {
        transform: translateX(-60px);
    }

    .slide-left.visible {
        transform: translateX(0);
    }

    .slide-right {
        transform: translateX(60px);
    }

    .slide-right.visible {
        transform: translateX(0);
    }

    .scale-in {
        transform: scale(0.9);
    }

    .scale-in.visible {
        transform: scale(1);
    }

    /* ========== HERO SECTION ========== */
    .lc-hero {
        position: relative;
        width: 100%;
        height: 90vh;
        min-height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        overflow: hidden;
        background: url('https://theknockout.in/wp-content/uploads/2026/05/knockout_career.gif?w=1920&q=80') center/cover no-repeat;
    }

    .lc-hero::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(10, 10, 10, 0.85) 0%, rgba(10, 10, 10, 0.55) 50%, rgba(10, 10, 10, 0.80) 100%);
        z-index: 1;
    }

    .lc-hero .hero-content {
        z-index: 3;
    }

    /* ========== INTRO SPLIT SECTION ========== */
    .lc-intro {
        padding: 100px 20px;
        background: var(--bg-charcoal);
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .lc-intro__inner {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 70px;
        align-items: center;
    }

    .lc-intro__img-wrap {
        position: relative;
        border-radius: 0;
        overflow: hidden;
    }

    .lc-intro__img-wrap img {
        width: 100%;
        height: 520px;
        object-fit: cover;
        display: block;
        transition: transform 0.6s ease;
    }

    .lc-intro__img-wrap:hover img {
        transform: scale(1.04);
    }

    .lc-intro__img-wrap::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(10, 10, 10, 0.7) 0%, transparent 60%);
        z-index: 1;
        pointer-events: none;
    }

    .lc-intro__img-badge {
        position: absolute;
        bottom: 24px;
        left: 24px;
        z-index: 2;
        background: var(--green-primary);
        color: var(--bg-obsidian);
        font-size: 0.7rem;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 10px 20px;
    }

    .lc-intro__neon-border {
        position: absolute;
        top: 16px;
        left: 16px;
        right: -16px;
        bottom: -16px;
        border: 2px solid var(--green-primary);
        opacity: 0.35;
        pointer-events: none;
        z-index: 0;
    }

    .lc-intro__content .section-title {
        margin-bottom: 24px;
    }

    .lc-intro__features {
        display: flex;
        flex-direction: column;
        gap: 18px;
        margin-top: 32px;
    }

    .lc-intro__feature {
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .lc-intro__feature-icon {
        font-size: 1.5rem;
        flex-shrink: 0;
        filter: drop-shadow(0 0 8px var(--green-glow));
    }

    .lc-intro__feature-text strong {
        display: block;
        font-size: 0.85rem;
        font-weight: 800;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: var(--green-primary);
        margin-bottom: 4px;
    }

    .lc-intro__feature-text span {
        font-size: 0.88rem;
        font-weight: 300;
        color: var(--text-muted);
        line-height: 1.6;
    }

    @media (max-width: 900px) {
        .lc-intro__inner {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .lc-intro__img-wrap img {
            height: 340px;
        }
    }

    .lc-hero::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 120px;
        background: linear-gradient(transparent, var(--bg-obsidian));
        z-index: 2;
    }

    .hero-neon-line {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: var(--green-primary);
        box-shadow: 0 0 20px var(--green-glow), 0 0 60px var(--green-glow);
        animation: neonPulse 2s ease-in-out infinite;
    }

    @keyframes neonPulse {

        0%,
        100% {
            opacity: 0.6;
            box-shadow: 0 0 20px var(--green-glow);
        }

        50% {
            opacity: 1;
            box-shadow: 0 0 40px var(--green-glow), 0 0 80px rgba(0, 230, 118, 0.2);
        }
    }

    .hero-content {
        position: relative;
        z-index: 3;
        max-width: 900px;
        padding: 0 20px;
    }

    .hero-content h1 {
        font-size: clamp(2.5rem, 6vw, 5rem);
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .hero-content h1 .green {
        color: var(--green-primary);
    }

    .hero-content .subheadline {
        font-size: clamp(1rem, 2vw, 1.3rem);
        color: var(--text-muted);
        line-height: 1.6;
        margin-bottom: 40px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .hero-stats {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: center;
        margin-bottom: 35px;
    }

    .hero-stat {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 18px;
        background: var(--bg-card);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 100px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--green-primary);
    }

    .hero-cta {
        display: inline-flex;
        gap: 15px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .btn-primary {
        display: inline-block;
        padding: 16px 48px;
        background: var(--green-primary);
        color: var(--bg-obsidian);
        font-size: 0.9rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .btn-primary:hover {
        background: var(--green-dark);
        box-shadow: 0 0 40px var(--green-glow);
        transform: translateY(-3px);
    }

    .btn-outline {
        display: inline-block;
        padding: 16px 48px;
        background: transparent;
        color: var(--green-primary);
        font-size: 0.9rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 2px;
        border: 2px solid var(--green-primary);
        transition: all 0.3s ease;
    }

    .btn-outline:hover {
        background: var(--green-primary);
        color: var(--bg-obsidian);
    }

    .btn-sm {
        padding: 12px 28px;
        font-size: 0.8rem;
    }

    /* ========== SECTION COMMON ========== */
    .lc-section {
        position: relative;
        padding: 100px 20px;
        overflow: hidden;
    }

    .lc-section .container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .section-label {
        display: inline-block;
        color: var(--green-primary);
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 15px;
        position: relative;
        padding-left: 40px;
    }

    .section-label::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        width: 28px;
        height: 2px;
        background: var(--green-primary);
    }

    .section-title {
        font-size: clamp(2rem, 4vw, 3.5rem);
        font-weight: 800;
        text-transform: uppercase;
        line-height: 1.1;
        margin-bottom: 20px;
    }

    .section-desc {
        color: var(--text-muted);
        font-size: 1.05rem;
        line-height: 1.7;
        max-width: 600px;
    }

    /* ========== FILTER BAR ========== */
    .lc-filter-section {
        background: var(--bg-charcoal);
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        padding: 20px 0;
        position: sticky;
        top: 0;
        z-index: 90;
    }

    .lc-filter-inner {
        display: flex;
        align-items: center;
        gap: 15px;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .lc-filter-pills {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .lc-filter-pill {
        padding: 10px 22px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 100px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: var(--text-muted);
        cursor: pointer;
        transition: all 0.25s var(--ease);
        background: var(--bg-card);
    }

    .lc-filter-pill:hover,
    .lc-filter-pill.active {
        border-color: var(--green-primary);
        color: var(--green-primary);
        background: var(--green-subtle);
        box-shadow: 0 0 20px var(--green-glow);
    }

    .lc-filter-count {
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--text-muted);
    }

    .lc-filter-count span {
        color: var(--green-primary);
    }

    /* ========== JOBS GRID ========== */
    .lc-jobs-section {
        padding: 80px 20px;
        background: var(--bg-obsidian);
    }

    .lc-jobs-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 24px;
        margin-top: 50px;
    }

    /* Job card image thumbnail */
    .lc-job-thumb {
        width: 100%;
        height: 190px;
        object-fit: cover;
        display: block;
        margin: -32px -28px 24px;
        width: calc(100% + 56px);
        transition: transform 0.5s ease;
    }

    .lc-job-card:hover .lc-job-thumb {
        transform: scale(1.04);
    }

    .lc-job-thumb-wrap {
        width: calc(100% + 56px);
        margin: -32px -28px 24px;
        height: 190px;
        overflow: hidden;
        flex-shrink: 0;
        position: relative;
    }

    .lc-job-thumb-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .lc-job-card:hover .lc-job-thumb-wrap img {
        transform: scale(1.06);
    }

    .lc-job-thumb-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, transparent 40%, rgba(26, 26, 26, 0.95) 100%);
    }

    .lc-job-card {
        background: var(--bg-card);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 0;
        padding: 32px 28px;
        transition: all 0.35s var(--ease);
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .lc-job-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--green-primary);
        transform: scaleY(0);
        transition: transform 0.35s var(--ease);
    }

    .lc-job-card:hover::before {
        transform: scaleY(1);
    }

    .lc-job-card:hover {
        border-color: var(--green-glow);
        transform: translateX(6px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
    }

    .lc-job-card.hidden {
        display: none;
    }

    .lc-job-dept {
        display: inline-flex;
        align-items: center;
        padding: 6px 16px;
        background: var(--green-subtle);
        border: 1px solid var(--green-glow);
        border-radius: 100px;
        color: var(--green-primary);
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 18px;
        align-self: flex-start;
    }

    .lc-job-title {
        font-size: clamp(1.4rem, 2.5vw, 1.8rem);
        font-weight: 800;
        letter-spacing: 1px;
        text-transform: uppercase;
        line-height: 1.1;
        color: var(--text-white);
        margin-bottom: 15px;
    }

    .lc-job-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 18px;
    }

    .lc-job-meta-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--text-muted);
    }

    .lc-job-meta-item .dot {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: var(--text-muted);
        flex-shrink: 0;
    }

    .lc-job-meta-item.openings {
        color: var(--green-primary);
    }

    .lc-job-meta-item.openings .dot {
        background: var(--green-primary);
    }

    .lc-job-summary {
        font-size: 0.95rem;
        font-weight: 300;
        line-height: 1.7;
        color: var(--text-muted);
        margin-bottom: 25px;
        flex: 1;
    }

    .lc-job-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        margin-top: auto;
    }

    .lc-job-type-tag {
        display: inline-flex;
        align-items: center;
        padding: 6px 14px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 100px;
        color: var(--text-muted);
        font-size: 0.7rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .lc-no-results {
        display: none;
        padding: 60px 20px;
        text-align: center;
        font-size: 1.1rem;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--text-muted);
    }

    /* ========== PERKS SECTION ========== */
    .lc-perks {
        padding: 100px 20px;
        background: var(--bg-charcoal);
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        position: relative;
    }

    .lc-perks__bg {
        position: absolute;
        inset: 0;
        background: url('https://images.unsplash.com/photo-1543269865-cbf427effbad?w=1920&q=70') center/cover no-repeat;
        opacity: 0.07;
        pointer-events: none;
    }

    /* Why Work Here — photo strip */
    .lc-perks-photos {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
        margin-bottom: 60px;
        overflow: hidden;
    }

    .lc-perks-photo {
        height: 220px;
        overflow: hidden;
        position: relative;
    }

    .lc-perks-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.6s ease;
        filter: brightness(0.8);
    }

    .lc-perks-photo:hover img {
        transform: scale(1.06);
        filter: brightness(1);
    }

    .lc-perks-photo-label {
        position: absolute;
        bottom: 12px;
        left: 12px;
        font-size: 0.65rem;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--text-white);
        background: rgba(0, 0, 0, 0.6);
        padding: 5px 12px;
        border-left: 3px solid var(--green-primary);
    }

    @media (max-width: 768px) {
        .lc-perks-photos {
            grid-template-columns: 1fr 1fr;
        }

        .lc-perks-photo:last-child {
            display: none;
        }
    }

    .lc-perks-head {
        text-align: center;
        margin-bottom: 60px;
    }

    .lc-perks-head .section-label {
        justify-content: center;
        margin-bottom: 15px;
    }

    .lc-perks-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 24px;
    }

    .lc-perk-card {
        background: var(--bg-card);
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 36px 28px;
        transition: all 0.4s var(--ease);
        position: relative;
        overflow: hidden;
        text-align: center;
    }

    .lc-perk-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 3px;
        background: var(--green-primary);
        transition: width 0.35s var(--ease);
    }

    .lc-perk-card:hover::after {
        width: 80%;
    }

    .lc-perk-card:hover {
        border-color: var(--green-glow);
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .lc-perk-icon {
        font-size: 2.8rem;
        margin-bottom: 18px;
        filter: drop-shadow(0 0 15px var(--green-glow));
    }

    .lc-perk-title {
        font-size: 1.1rem;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--green-primary);
        margin-bottom: 12px;
    }

    .lc-perk-body {
        font-size: 0.9rem;
        font-weight: 300;
        line-height: 1.7;
        color: var(--text-muted);
    }

    /* ========== CTA SECTION ========== */
    .lc-cta {
        background: var(--bg-obsidian);
        text-align: center;
        padding: 0;
        position: relative;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        overflow: hidden;
    }

    .lc-cta__bg {
        position: absolute;
        inset: 0;
        background: url('https://images.unsplash.com/photo-1529543544282-ea669407fca3?w=1920&q=75') center/cover no-repeat;
        z-index: 0;
    }

    .lc-cta__overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(10, 10, 10, 0.92) 0%, rgba(10, 10, 10, 0.78) 100%);
        z-index: 1;
    }

    .lc-cta__content-wrap {
        position: relative;
        z-index: 2;
        padding: 120px 20px;
    }

    .lc-cta::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(175, 209, 53, 0.12) 0%, transparent 70%);
        pointer-events: none;
        z-index: 2;
    }

    .lc-cta__inner {
        position: relative;
        z-index: 1;
        max-width: 700px;
        margin: 0 auto;
    }

    .lc-cta h2 {
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 900;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .lc-cta h2 .green {
        color: var(--green-primary);
    }

    .lc-cta p {
        color: var(--text-muted);
        font-size: 1.05rem;
        line-height: 1.7;
        margin-bottom: 35px;
    }

    .lc-cta__btns {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }

    /* ========== APPLICATION MODAL ========== */
    .lc-modal-backdrop {
        position: fixed;
        inset: 0;
        background: rgba(10, 10, 10, 0.92);
        backdrop-filter: blur(8px);
        z-index: 9998;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.35s var(--ease);
    }

    .lc-modal-backdrop.open {
        opacity: 1;
        pointer-events: all;
    }

    .lc-modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, calc(-50% + 30px));
        width: min(780px, calc(100vw - 30px));
        max-height: 90vh;
        background: var(--bg-card);
        border: 1px solid var(--green-glow);
        border-radius: 0;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        z-index: 9999;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.35s var(--ease), transform 0.35s var(--ease);
    }

    .lc-modal.open {
        opacity: 1;
        pointer-events: all;
        transform: translate(-50%, -50%);
    }

    .lc-modal__head {
        padding: 28px 32px 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 15px;
        flex-shrink: 0;
    }

    .lc-modal__head-left {
        flex: 1;
        min-width: 0;
    }

    .lc-modal__dept {
        display: inline-flex;
        align-items: center;
        padding: 6px 14px;
        background: var(--green-subtle);
        border: 1px solid var(--green-glow);
        border-radius: 100px;
        color: var(--green-primary);
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 12px;
    }

    .lc-modal__title {
        font-size: clamp(1.4rem, 4vw, 2rem);
        font-weight: 800;
        letter-spacing: 1px;
        text-transform: uppercase;
        line-height: 1.1;
        color: var(--text-white);
        margin-bottom: 10px;
    }

    .lc-modal__meta {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .lc-modal__meta-item {
        font-size: 0.7rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--text-muted);
    }

    .lc-modal__meta-item+.lc-modal__meta-item::before {
        content: '·';
        margin-right: 8px;
        color: var(--green-primary);
    }

    .lc-modal__close {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--bg-obsidian);
        border: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: var(--text-muted);
        font-size: 1.5rem;
        flex-shrink: 0;
        transition: all 0.25s var(--ease);
    }

    .lc-modal__close:hover {
        border-color: var(--green-primary);
        color: var(--green-primary);
        background: var(--green-subtle);
    }

    .lc-modal__tabs {
        display: flex;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        padding: 0 32px;
        flex-shrink: 0;
    }

    .lc-modal__tab {
        padding: 16px 20px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--text-muted);
        cursor: pointer;
        border-bottom: 2px solid transparent;
        margin-bottom: -1px;
        transition: all 0.25s var(--ease);
        background: none;
        border: none;
    }

    .lc-modal__tab:hover {
        color: var(--text-white);
    }

    .lc-modal__tab.active {
        color: var(--green-primary);
        border-bottom-color: var(--green-primary);
    }

    .lc-modal__body {
        overflow-y: auto;
        flex: 1;
        padding: 28px 32px;
        scrollbar-width: thin;
        scrollbar-color: var(--green-primary) transparent;
    }

    .lc-modal__body::-webkit-scrollbar {
        width: 5px;
    }

    .lc-modal__body::-webkit-scrollbar-track {
        background: transparent;
    }

    .lc-modal__body::-webkit-scrollbar-thumb {
        background: var(--green-primary);
        border-radius: 0;
    }

    .lc-tab-panel {
        display: none;
    }

    .lc-tab-panel.active {
        display: block;
    }

    .lc-modal-about {
        font-size: 0.95rem;
        font-weight: 300;
        line-height: 1.8;
        color: var(--text-muted);
        margin-bottom: 28px;
    }

    .lc-modal-section-label {
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: var(--green-primary);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .lc-modal-section-label::after {
        content: '';
        flex: 1;
        height: 1px;
        background: linear-gradient(90deg, var(--green-glow), transparent);
    }

    .lc-modal-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 28px;
    }

    .lc-modal-list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 0.9rem;
        font-weight: 300;
        line-height: 1.65;
        color: var(--text-muted);
    }

    .lc-modal-list li::before {
        content: '';
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--green-primary);
        flex-shrink: 0;
        margin-top: 7px;
    }

    .lc-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .lc-form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
    }

    @media (max-width: 560px) {
        .lc-form-row {
            grid-template-columns: 1fr;
        }
    }

    .lc-field {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .lc-field label {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--text-muted);
    }

    .lc-field input,
    .lc-field select,
    .lc-field textarea {
        background: var(--bg-obsidian);
        border: 1.5px solid rgba(255, 255, 255, 0.1);
        border-radius: 0;
        padding: 14px 16px;
        font-size: 0.95rem;
        font-weight: 300;
        color: var(--text-white);
        transition: border-color 0.25s var(--ease);
        width: 100%;
        outline: none;
        -webkit-appearance: none;
    }

    .lc-field input::placeholder,
    .lc-field textarea::placeholder {
        color: var(--text-muted);
        opacity: 0.6;
    }

    .lc-field select {
        cursor: pointer;
    }

    .lc-field select option {
        background: var(--bg-obsidian);
    }

    .lc-field textarea {
        resize: vertical;
        min-height: 100px;
    }

    .lc-field input:focus,
    .lc-field select:focus,
    .lc-field textarea:focus {
        border-color: var(--green-primary);
        box-shadow: 0 0 0 3px var(--green-subtle);
    }

    .lc-avail-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }

    @media (max-width: 560px) {
        .lc-avail-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .lc-avail-check {
        display: none;
    }

    .lc-avail-label {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 12px 8px;
        border: 1.5px solid rgba(255, 255, 255, 0.1);
        border-radius: 0;
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--text-muted);
        cursor: pointer;
        transition: all 0.25s var(--ease);
        text-align: center;
        line-height: 1.3;
    }

    .lc-avail-check:checked+.lc-avail-label {
        border-color: var(--green-primary);
        color: var(--green-primary);
        background: var(--green-subtle);
        box-shadow: 0 0 15px var(--green-glow);
    }

    .lc-modal__footer {
        padding: 20px 32px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        flex-wrap: wrap;
        flex-shrink: 0;
    }

    .lc-modal__footer-note {
        font-size: 0.65rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--text-muted);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .lc-wa-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #25D366;
        flex-shrink: 0;
    }

    .lc-wa-icon svg {
        width: 12px;
        height: 12px;
        fill: #fff;
    }

    /* ========== FLOATING CTA ========== */
    .floating-cta {
        position: fixed;
        bottom: 25px;
        right: 25px;
        z-index: 9999;
        padding: 14px 28px;
        background: var(--green-primary);
        color: var(--bg-obsidian);
        font-weight: 800;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        text-decoration: none;
        box-shadow: 0 4px 25px rgba(0, 230, 118, 0.45);
        transition: all 0.3s var(--ease);
        animation: floatBounce 3s ease-in-out infinite;
    }

    .floating-cta:hover {
        transform: scale(1.05) translateY(-3px);
        box-shadow: 0 8px 35px rgba(0, 230, 118, 0.65);
    }

    @keyframes floatBounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-6px);
        }
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 1024px) {
        .lc-jobs-grid {
            grid-template-columns: 1fr;
        }

        .lc-perks-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .lc-section {
            padding: 70px 20px;
        }

        .hero-content h1 {
            font-size: 2.4rem;
        }

        .lc-perks-grid {
            grid-template-columns: 1fr;
        }

        .lc-avail-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .lc-modal__head {
            padding: 22px 24px 16px;
        }

        .lc-modal__tabs {
            padding: 0 24px;
        }

        .lc-modal__body {
            padding: 24px;
        }

        .lc-modal__footer {
            padding: 18px 24px;
        }
    }

    @media (max-width: 560px) {
        .hero-cta {
            flex-direction: column;
            align-items: center;
        }

        .lc-filter-inner {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .lc-job-footer {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    /* ========== SCROLLBAR ========== */
    ::-webkit-scrollbar {
        width: 7px;
    }

    ::-webkit-scrollbar-track {
        background: var(--bg-obsidian);
    }

    ::-webkit-scrollbar-thumb {
        background: var(--green-primary);
        border-radius: 0;
    }
</style>

<div class="liquid-careers">

    <!-- ===== HERO ===== -->
    <section class="lc-hero">
        <div class="hero-content fade-in-section">
            <h1>Join the Team at<br><span class="green">The Knockout</span></h1>
            <p class="subheadline">
                Work where every shift has a crowd, every night has energy, and every role shapes the best sports bar
                experience in Kolkata. Find your place in the team.
            </p>
            <div class="hero-stats">
                <div class="hero-stat">🎯 <span><?= count($ko_jobs) ?> Open Roles</span></div>
                <div class="hero-stat">📍 <span>Kolkata, WB</span></div>
                <div class="hero-stat">🏆 <span>Award-Winning Venue</span></div>
                <div class="hero-stat">📲 <span>Apply via WhatsApp</span></div>
            </div>
            <div class="hero-cta">
                <a href="#open-roles" class="btn-primary">See Open Roles</a>
                <a href="#perks" class="btn-outline">Why Work Here</a>
            </div>
        </div>
        <div class="hero-neon-line"></div>
    </section>

    <!-- ===== INTRO SPLIT ===== -->
    <section class="lc-intro">
        <div class="lc-intro__inner">
            <div class="lc-intro__img-wrap fade-in-section slide-left">
                <div class="lc-intro__neon-border"></div>
                <img src="https://theknockout.in/wp-content/uploads/2026/05/food-final.gif?w=900&q=80"
                    alt="The Knockout bar atmosphere" loading="lazy" />
                <div class="lc-intro__img-badge">Kolkata's #1 Sports Bar</div>
            </div>
            <div class="lc-intro__content fade-in-section slide-right">
                <span class="section-label">Who We Are</span>
                <h2 class="section-title">More Than a <span class="green">Bar</span></h2>
                <p class="section-desc">The Knockout is Kolkata's premier live-sports destination — a place where every
                    match night becomes a memory. We're building a team that lives and breathes hospitality, energy, and
                    passion for sport.</p>
                <div class="lc-intro__features">
                    <div class="lc-intro__feature">
                        <div class="lc-intro__feature-icon">🥊</div>
                        <div class="lc-intro__feature-text">
                            <strong>Electric Match Nights</strong>
                            <span>Work alongside a full house every IPL, ISL & World Cup screening — the energy is
                                unmatched.</span>
                        </div>
                    </div>
                    <div class="lc-intro__feature">
                        <div class="lc-intro__feature-icon">🍹</div>
                        <div class="lc-intro__feature-text">
                            <strong>Award-Winning Drinks & Food</strong>
                            <span>Be part of a team that crafts experiences — from signature cocktails to bold bar
                                bites.</span>
                        </div>
                    </div>
                    <div class="lc-intro__feature">
                        <div class="lc-intro__feature-icon">🚀</div>
                        <div class="lc-intro__feature-text">
                            <strong>Grow With Us</strong>
                            <span>We're expanding — and every person who joins now shapes what The Knockout becomes
                                next.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FILTER BAR ===== -->
    <div class="lc-filter-section" id="open-roles">
        <div class="lc-filter-inner">
            <div class="lc-filter-pills" id="lc-filters">
                <button class="lc-filter-pill active" data-filter="all">All Roles</button>
                <?php
                $depts = array_unique(array_column($ko_jobs, 'dept'));
                sort($depts);
                foreach ($depts as $d):
                    ?>
                    <button class="lc-filter-pill" data-filter="<?= esc_attr($d) ?>"><?= esc_html($d) ?></button>
                <?php endforeach; ?>
            </div>
            <div class="lc-filter-count">
                <span id="lc-visible-count"><?= count($ko_jobs) ?></span> of <?= count($ko_jobs) ?> roles
            </div>
        </div>
    </div>

    <!-- ===== JOBS GRID ===== -->
    <section class="lc-section lc-jobs-section">
        <div class="container">
            <span class="section-label fade-in-section">Open Positions</span>
            <h2 class="section-title fade-in-section">Find Your<br><span class="green">Role</span></h2>
            <p class="section-desc fade-in-section">Browse our current openings. Filter by department to find your
                perfect match.</p>

            <?php
            $job_images = [
                // Management
                'operations-manager' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=700&q=75',
                'asst-operations-manager' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=700&q=75',
                'duty-manager' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?w=700&q=75',
                // F&B Service
                'restaurant-captain' => 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=700&q=75',
                'steward' => 'https://images.unsplash.com/photo-1559329007-40df8a9345d8?w=700&q=75',
                'bartender' => 'https://images.unsplash.com/photo-1551024709-8f23befc6f87?w=700&q=75',
                'bar-supervisor' => 'https://images.unsplash.com/photo-1470337458703-46ad1756a187?w=700&q=75',
                // Guest Relations
                'gre' => 'https://images.unsplash.com/photo-1528495612343-9ca9f4a4de28?w=700&q=75',
                'hostess' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=700&q=75',
                'reservation-exec' => 'https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=700&q=75',
                // Kitchen
                'cdp' => 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=700&q=75',
                'commis-chef' => 'https://images.unsplash.com/photo-1581299894007-aaa50297cf16?w=700&q=75',
                'kitchen-helper' => 'https://images.unsplash.com/photo-1607631568010-a87245c0daf8?w=700&q=75',
                // Gaming & Entertainment
                'gaming-exec' => 'https://images.unsplash.com/photo-1511512578047-dfb367046420?w=700&q=75',
                'gaming-supervisor' => 'https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?w=700&q=75',
                'event-coordinator' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=700&q=75',
                // Housekeeping & Maintenance
                'hk-supervisor' => 'https://images.unsplash.com/photo-1584820927498-cfe5211fd8bf?w=700&q=75',
                'hk-associate' => 'https://images.unsplash.com/photo-1563453392212-326f5e854473?w=700&q=75',
                'maintenance-tech' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=700&q=75',
                'purchase-exec' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=700&q=75',
                // Security
                'security-supervisor' => 'https://images.unsplash.com/photo-1605289355680-75fb41239154?w=700&q=75',
                'security-bouncer' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=700&q=75',
                // Hookah
                'hookah-specialist' => 'https://images.unsplash.com/photo-1546173159-315724a31696?w=700&q=75',
                'hookah-supervisor' => 'https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?w=700&q=75',
                'hookah-assistant' => 'https://images.unsplash.com/photo-1571066811602-716837d681de?w=700&q=75',
            ];
            ?>
            <div class="lc-jobs-grid" id="lc-jobs-grid">
                <?php foreach ($ko_jobs as $i => $job): ?>
                    <div class="lc-job-card fade-in-section <?= $i % 2 === 0 ? 'slide-left' : 'slide-right' ?>"
                        data-dept="<?= esc_attr($job['dept']) ?>" data-job-id="<?= esc_attr($job['id']) ?>"
                        style="transition-delay: <?= ($i % 4) * 0.1 ?>s">

                        <div class="lc-job-thumb-wrap">
                            <img src="<?= esc_url($job_images[$job['id']] ?? 'https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=700&q=75') ?>"
                                alt="<?= esc_attr($job['title']) ?>" loading="lazy" />
                            <div class="lc-job-thumb-overlay"></div>
                        </div>

                        <span class="lc-job-dept"><?= esc_html($job['dept']) ?></span>
                        <h3 class="lc-job-title"><?= esc_html($job['title']) ?></h3>

                        <div class="lc-job-meta">
                            <span class="lc-job-meta-item">
                                <span class="dot"></span>
                                <?= esc_html($job['location']) ?>
                            </span>
                            <span class="lc-job-meta-item">
                                <span class="dot"></span>
                                <?= esc_html($job['type']) ?>
                            </span>
                            <span class="lc-job-meta-item openings">
                                <span class="dot"></span>
                                <?= $job['openings'] ?> Opening<?= $job['openings'] > 1 ? 's' : '' ?>
                            </span>
                        </div>

                        <p class="lc-job-summary"><?= esc_html($job['summary']) ?></p>

                        <div class="lc-job-footer">
                            <span class="lc-job-type-tag"><?= esc_html($job['type']) ?></span>
                            <button class="btn-primary btn-sm lc-open-modal" data-job-id="<?= esc_attr($job['id']) ?>">
                                View & Apply
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="lc-no-results" id="lc-no-results">
                No roles found in this department right now. Check back soon!
            </div>
        </div>
    </section>

    <!-- ===== PERKS ===== -->
    <section class="lc-section lc-perks" id="perks">
        <div class="lc-perks__bg"></div>
        <div class="container">
            <div class="lc-perks-head fade-in-section">
                <span class="section-label">Life at The Knockout</span>
                <h2 class="section-title">Why Work <span class="green">Here</span></h2>
                <p class="section-desc">More than a job — it's a vibe you'll remember.</p>
            </div>

            <!-- Photo strip -->
            <div class="lc-perks-photos fade-in-section">
                <div class="lc-perks-photo">
                    <img src="https://images.unsplash.com/photo-1528495612343-9ca9f4a4de28?w=700&q=75"
                        alt="Bar team at The Knockout" loading="lazy" />
                    <div class="lc-perks-photo-label">The Bar Team</div>
                </div>
                <div class="lc-perks-photo">
                    <img src="https://theknockout.in/wp-content/uploads/2026/05/Tracking-Other-Bowlers.gif?w=700&q=75"
                        alt="Match night atmosphere" loading="lazy" />
                    <div class="lc-perks-photo-label">Match Nights</div>
                </div>
                <div class="lc-perks-photo">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=700&q=75"
                        alt="Staff at work" loading="lazy" />
                    <div class="lc-perks-photo-label">The Floor Crew</div>
                </div>
            </div>

            <div class="lc-perks-grid">
                <div class="lc-perk-card scale-in">
                    <div class="lc-perk-icon">🏟️</div>
                    <h4 class="lc-perk-title">Electric Atmosphere</h4>
                    <p class="lc-perk-body">Work in Kolkata's most energetic sports bar. Every match night is a
                        full-house experience unlike anything else in the city.</p>
                </div>
                <div class="lc-perk-card scale-in" style="transition-delay: 0.1s;">
                    <div class="lc-perk-icon">💰</div>
                    <h4 class="lc-perk-title">Competitive Pay</h4>
                    <p class="lc-perk-body">Industry-leading salaries, service charges and performance bonuses. We
                        reward hustle and talent fairly.</p>
                </div>
                <div class="lc-perk-card scale-in" style="transition-delay: 0.2s;">
                    <div class="lc-perk-icon">📈</div>
                    <h4 class="lc-perk-title">Career Growth</h4>
                    <p class="lc-perk-body">We promote from within. Whether you start on the floor or behind the bar,
                        there's a path to management for those who want it.</p>
                </div>
                <div class="lc-perk-card scale-in" style="transition-delay: 0.3s;">
                    <div class="lc-perk-icon">🎓</div>
                    <h4 class="lc-perk-title">Training & Skills</h4>
                    <p class="lc-perk-body">Regular training sessions covering everything from cocktail techniques to
                        customer experience — we invest in your craft.</p>
                </div>
                <div class="lc-perk-card scale-in" style="transition-delay: 0.4s;">
                    <div class="lc-perk-icon">🍺</div>
                    <h4 class="lc-perk-title">Staff Perks</h4>
                    <p class="lc-perk-body">Staff meals, complimentary drinks during shift, exclusive access to event
                        nights and merchandise discounts.</p>
                </div>
                <div class="lc-perk-card scale-in" style="transition-delay: 0.5s;">
                    <div class="lc-perk-icon">🤝</div>
                    <h4 class="lc-perk-title">Great Team Culture</h4>
                    <p class="lc-perk-body">A tight-knit crew that celebrates together and supports each other through
                        the busiest match nights of the year.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== BOTTOM CTA ===== -->
    <section class="lc-section lc-cta">
        <div class="lc-cta__bg"></div>
        <div class="lc-cta__overlay"></div>
        <div class="lc-cta__content-wrap">
            <div class="lc-cta__inner fade-in-section">
                <span class="section-label" style="color: var(--green-primary);">Don't See Your Fit?</span>
                <h2>Drop Us a <span class="green">Message</span></h2>
                <p>
                    We're always on the lookout for exceptional people. Introduce yourself via WhatsApp and we'll keep
                    your
                    details on file for future opportunities.
                </p>
                <div class="lc-cta__btns">
                    <a href="https://wa.me/<?= $ko_whatsapp ?>?text=Hi%20The%20Knockout%2C%20I%27d%20love%20to%20introduce%20myself%20and%20inquire%20about%20future%20opportunities."
                        target="_blank" rel="noopener" class="btn-primary">
                        WhatsApp Us Directly
                    </a>
                    <a href="tel:+9131040034" class="btn-outline">Call the Venue</a>
                </div>
            </div>
        </div>
    </section>

</div><!-- /.liquid-careers -->

<!-- Floating CTA -->
<a href="https://wa.me/<?= $ko_whatsapp ?>?text=Hi%20The%20Knockout%2C%20I%27m%20interested%20in%20joining%20your%20team!"
    target="_blank" rel="noopener" class="floating-cta">📞 Apply Now</a>

<!-- ===== APPLICATION MODAL ===== -->
<div class="lc-modal-backdrop" id="lc-backdrop"></div>

<div class="lc-modal" id="lc-modal" role="dialog" aria-modal="true" aria-labelledby="lc-modal-title">

    <!-- Head -->
    <div class="lc-modal__head">
        <div class="lc-modal__head-left">
            <div class="lc-modal__dept" id="lc-modal-dept">Dept</div>
            <h2 class="lc-modal__title" id="lc-modal-title">Job Title</h2>
            <div class="lc-modal__meta">
                <span class="lc-modal__meta-item" id="lc-modal-location">Location</span>
                <span class="lc-modal__meta-item" id="lc-modal-type">Type</span>
                <span class="lc-modal__meta-item" id="lc-modal-openings">Openings</span>
            </div>
        </div>
        <button class="lc-modal__close" id="lc-modal-close" aria-label="Close">&times;</button>
    </div>

    <!-- Tabs -->
    <div class="lc-modal__tabs">
        <button class="lc-modal__tab active" data-tab="details">Job Details</button>
        <button class="lc-modal__tab" data-tab="apply">Apply Now</button>
    </div>

    <!-- Body -->
    <div class="lc-modal__body">

        <!-- Details panel -->
        <div class="lc-tab-panel active" id="lc-panel-details">
            <p class="lc-modal-about" id="lc-modal-about"></p>

            <div class="lc-modal-section-label">Responsibilities</div>
            <ul class="lc-modal-list" id="lc-modal-duties"></ul>

            <div class="lc-modal-section-label">Requirements</div>
            <ul class="lc-modal-list" id="lc-modal-require"></ul>

            <button class="btn-primary" id="lc-switch-to-apply" style="margin-top: 10px;">
                Apply for This Role →
            </button>
        </div>

        <!-- Apply panel -->
        <div class="lc-tab-panel" id="lc-panel-apply">
            <form class="lc-form" id="lc-apply-form" novalidate>

                <div class="lc-form-row">
                    <div class="lc-field">
                        <label for="lc-name">Full Name *</label>
                        <input type="text" id="lc-name" name="name" placeholder="Rahul Sharma" required />
                    </div>
                    <div class="lc-field">
                        <label for="lc-phone">Phone Number *</label>
                        <input type="tel" id="lc-phone" name="phone" placeholder="+91 98300 00000" required />
                    </div>
                </div>

                <div class="lc-field">
                    <label for="lc-email">Email Address</label>
                    <input type="email" id="lc-email" name="email" placeholder="rahul@email.com" />
                </div>

                <div class="lc-field">
                    <label for="lc-experience">Years of Relevant Experience *</label>
                    <select id="lc-experience" name="experience" required>
                        <option value="" disabled selected>Select experience</option>
                        <option value="Fresher / No experience">Fresher / No experience</option>
                        <option value="Less than 1 year">Less than 1 year</option>
                        <option value="1–2 years">1–2 years</option>
                        <option value="3–5 years">3–5 years</option>
                        <option value="5+ years">5+ years</option>
                    </select>
                </div>

                <div class="lc-field">
                    <label>Availability *</label>
                    <div class="lc-avail-grid">
                        <div>
                            <input type="checkbox" class="lc-avail-check" id="av-weekday" name="availability"
                                value="Weekdays" />
                            <label for="av-weekday" class="lc-avail-label">Weekdays</label>
                        </div>
                        <div>
                            <input type="checkbox" class="lc-avail-check" id="av-weekend" name="availability"
                                value="Weekends" />
                            <label for="av-weekend" class="lc-avail-label">Weekends</label>
                        </div>
                        <div>
                            <input type="checkbox" class="lc-avail-check" id="av-evenings" name="availability"
                                value="Evenings" />
                            <label for="av-evenings" class="lc-avail-label">Evenings</label>
                        </div>
                        <div>
                            <input type="checkbox" class="lc-avail-check" id="av-nights" name="availability"
                                value="Late Nights" />
                            <label for="av-nights" class="lc-avail-label">Late Nights</label>
                        </div>
                        <div>
                            <input type="checkbox" class="lc-avail-check" id="av-matchdays" name="availability"
                                value="Match Days" />
                            <label for="av-matchdays" class="lc-avail-label">Match Days</label>
                        </div>
                        <div>
                            <input type="checkbox" class="lc-avail-check" id="av-flexible" name="availability"
                                value="Fully Flexible" />
                            <label for="av-flexible" class="lc-avail-label">Fully Flexible</label>
                        </div>
                    </div>
                </div>

                <div class="lc-field">
                    <label for="lc-message">Why The Knockout? (optional)</label>
                    <textarea id="lc-message" name="message"
                        placeholder="Tell us a little about yourself and why you'd love to work here…"></textarea>
                </div>

            </form>
        </div>

    </div>

    <!-- Footer -->
    <div class="lc-modal__footer">
        <div class="lc-modal__footer-note">
            <span class="lc-wa-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                </svg>
            </span>
            Application will open in WhatsApp
        </div>
        <button class="btn-primary" id="lc-submit-btn" type="button">
            <span id="lc-submit-text">Send via WhatsApp</span>
        </button>
    </div>

</div><!-- /.lc-modal -->

<!-- JSON job data for JS -->
<script id="lc-job-data" type="application/json">
<?php echo json_encode($ko_jobs, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>
</script>

<script>
    (function () {
        /* ── Data ── */
        const JOBS = JSON.parse(document.getElementById('lc-job-data').textContent);
        const WA_NUM = '<?= $ko_whatsapp ?>';

        /* ── Element refs ── */
        const backdrop = document.getElementById('lc-backdrop');
        const modal = document.getElementById('lc-modal');
        const closeBtn = document.getElementById('lc-modal-close');
        const submitBtn = document.getElementById('lc-submit-btn');
        const submitText = document.getElementById('lc-submit-text');
        const switchToApply = document.getElementById('lc-switch-to-apply');
        const applyForm = document.getElementById('lc-apply-form');
        const filterBar = document.getElementById('lc-filters');
        const visibleCount = document.getElementById('lc-visible-count');
        const noResults = document.getElementById('lc-no-results');
        const grid = document.getElementById('lc-jobs-grid');
        const allCards = [...grid.querySelectorAll('.lc-job-card')];
        const tabBtns = [...modal.querySelectorAll('.lc-modal__tab')];
        const tabPanels = [...modal.querySelectorAll('.lc-tab-panel')];

        let currentJob = null;

        /* ══════════════════ FILTER ══════════════════ */
        filterBar.addEventListener('click', function (e) {
            const pill = e.target.closest('.lc-filter-pill');
            if (!pill) return;
            [...filterBar.querySelectorAll('.lc-filter-pill')].forEach(p => p.classList.remove('active'));
            pill.classList.add('active');
            const filter = pill.dataset.filter;
            let count = 0;
            allCards.forEach(card => {
                const show = filter === 'all' || card.dataset.dept === filter;
                card.classList.toggle('hidden', !show);
                if (show) count++;
            });
            visibleCount.textContent = count;
            noResults.style.display = count === 0 ? 'block' : 'none';
            grid.style.display = count === 0 ? 'none' : '';
        });

        /* ══════════════════ TABS ══════════════════ */
        function switchTab(tabId) {
            tabBtns.forEach(b => b.classList.toggle('active', b.dataset.tab === tabId));
            tabPanels.forEach(p => p.classList.toggle('active', p.id === 'lc-panel-' + tabId));
        }
        tabBtns.forEach(btn => btn.addEventListener('click', () => switchTab(btn.dataset.tab)));
        if (switchToApply) switchToApply.addEventListener('click', () => switchTab('apply'));

        /* ══════════════════ OPEN/CLOSE MODAL ══════════════════ */
        function openModal(jobId) {
            const job = JOBS.find(j => j.id === jobId);
            if (!job) return;
            currentJob = job;
            document.getElementById('lc-modal-dept').textContent = job.dept;
            document.getElementById('lc-modal-title').textContent = job.title;
            document.getElementById('lc-modal-location').textContent = job.location;
            document.getElementById('lc-modal-type').textContent = job.type;
            document.getElementById('lc-modal-openings').textContent = job.openings + ' Opening' + (job.openings > 1 ? 's' : '');
            document.getElementById('lc-modal-about').textContent = job.about;
            document.getElementById('lc-modal-duties').innerHTML = job.duties.map(d => `<li>${d}</li>`).join('');
            document.getElementById('lc-modal-require').innerHTML = job.require.map(r => `<li>${r}</li>`).join('');
            applyForm.reset();
            switchTab('details');
            submitText.textContent = 'Send via WhatsApp';
            backdrop.classList.add('open');
            modal.classList.add('open');
            document.body.style.overflow = 'hidden';
            modal.focus();
        }
        function closeModal() {
            backdrop.classList.remove('open');
            modal.classList.remove('open');
            document.body.style.overflow = '';
            currentJob = null;
        }
        closeBtn.addEventListener('click', closeModal);
        backdrop.addEventListener('click', closeModal);
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
        grid.addEventListener('click', function (e) {
            const btn = e.target.closest('.lc-open-modal');
            if (!btn) return;
            openModal(btn.dataset.jobId);
        });

        /* ══════════════════ WHATSAPP SUBMIT ══════════════════ */
        submitBtn.addEventListener('click', function () {
            if (!modal.querySelector('#lc-panel-apply').classList.contains('active')) {
                switchTab('apply');
                return;
            }
            const name = document.getElementById('lc-name').value.trim();
            const phone = document.getElementById('lc-phone').value.trim();
            const exp = document.getElementById('lc-experience').value;
            if (!name) { alert('Please enter your full name.'); document.getElementById('lc-name').focus(); return; }
            if (!phone) { alert('Please enter your phone number.'); document.getElementById('lc-phone').focus(); return; }
            if (!exp) { alert('Please select your experience level.'); document.getElementById('lc-experience').focus(); return; }
            const avail = [...document.querySelectorAll('.lc-avail-check:checked')].map(c => c.value);
            if (avail.length === 0) { alert('Please select at least one availability slot.'); return; }
            const email = document.getElementById('lc-email').value.trim();
            const message = document.getElementById('lc-message').value.trim();
            const lines = [
                '🥊 *JOB APPLICATION — THE KNOCKOUT*', '',
                `*Role:* ${currentJob.title}`, `*Department:* ${currentJob.dept}`, `*Employment Type:* ${currentJob.type}`, '',
                '━━━━━━━━━━━━━━━━━━━━━━', '*APPLICANT DETAILS*', '━━━━━━━━━━━━━━━━━━━━━━',
                `*Name:* ${name}`, `*Phone:* ${phone}`,
                email ? `*Email:* ${email}` : null, `*Experience:* ${exp}`, `*Availability:* ${avail.join(', ')}`,
                message ? `\n*Cover Note:*\n${message}` : null, '',
                '━━━━━━━━━━━━━━━━━━━━━━', '_Sent via The Knockout Careers Page_',
            ].filter(l => l !== null).join('\n');
            const encoded = encodeURIComponent(lines);
            const waUrl = `https://wa.me/${WA_NUM}?text=${encoded}`;
            submitText.textContent = 'Opening WhatsApp…';
            submitBtn.disabled = true;
            submitBtn.style.opacity = '.6';
            setTimeout(() => {
                window.open(waUrl, '_blank', 'noopener,noreferrer');
                submitText.textContent = '✓ Sent! We\'ll be in touch.';
                submitBtn.style.background = '#25D366';
                submitBtn.style.borderColor = '#25D366';
                submitBtn.style.color = '#fff';
            }, 400);
        });

        /* ══════════════════ SCROLL REVEAL ══════════════════ */
        const io = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    io.unobserve(e.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
        document.querySelectorAll('.fade-in-section, .slide-left, .slide-right, .scale-in').forEach(el => io.observe(el));

        /* ══════════════════ SMOOTH SCROLL ══════════════════ */
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const target = document.querySelector(a.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    })();
</script>

<?php get_footer(); ?>