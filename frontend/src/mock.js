// Mock data for Maza Elite chauffeur service

export const fleetData = [
  {
    id: 'mercedes-s-class',
    tier: 'First Class',
    name: 'Mercedes-Benz S-Class',
    tagline: 'The Pinnacle of Executive Travel',
    image: 'https://images.pexels.com/photos/26691322/pexels-photo-26691322.jpeg',
    specs: { passengers: 3, luggage: 3, wifi: true, leather: true },
    features: ['Reclining Rear Seats', 'Climate-Controlled Cabin', 'Privacy Glass'],
  },
  {
    id: 'mercedes-s-class-lwb',
    tier: 'First Class',
    name: 'Mercedes-Benz S-Class LWB',
    tagline: 'Extended Wheelbase Refinement',
    image: 'https://images.pexels.com/photos/37094847/pexels-photo-37094847.jpeg',
    specs: { passengers: 3, luggage: 3, wifi: true, leather: true },
    features: ['Extended Legroom', 'Burmester 4D Audio', 'Rear Massage Seats'],
  },
  {
    id: 'mercedes-maybach-s580',
    tier: 'First Class',
    name: 'Mercedes-Maybach S 580',
    tagline: 'Quintessence of Haute Couture',
    image: 'https://images.pexels.com/photos/28720713/pexels-photo-28720713.jpeg',
    specs: { passengers: 2, luggage: 3, wifi: true, leather: true },
    features: ['Executive Rear Lounge', 'Champagne Compartment', 'Acoustic Comfort Cabin'],
  },
  {
    id: 'mercedes-maybach-s680',
    tier: 'First Class',
    name: 'Mercedes-Maybach S 680',
    tagline: 'Sovereign V12 Performance',
    image: 'https://images.pexels.com/photos/9275801/pexels-photo-9275801.jpeg',
    specs: { passengers: 2, luggage: 3, wifi: true, leather: true },
    features: ['Two-Tone Coachwork', 'Nappa Leather Throne Seats', 'Rear Refrigerator'],
  },
  {
    id: 'bmw-7-series',
    tier: 'First Class',
    name: 'BMW 7 Series',
    tagline: 'Engineered for the Discerning Executive',
    image: 'https://images.pexels.com/photos/7985342/pexels-photo-7985342.jpeg',
    specs: { passengers: 3, luggage: 3, wifi: true, leather: true },
    features: ['Bowers & Wilkins Audio', 'Executive Lounge Seating', 'Ambient Lighting'],
  },
  {
    id: 'bmw-760i',
    tier: 'First Class',
    name: 'BMW 760i xDrive',
    tagline: 'Twin-Turbo V8 Sovereignty',
    image: 'https://images.pexels.com/photos/18029642/pexels-photo-18029642.jpeg',
    specs: { passengers: 3, luggage: 3, wifi: true, leather: true },
    features: ['Theatre Screen 31"', 'Sky Lounge Roof', 'Crystal Iconic Glow'],
  },
  {
    id: 'bmw-i7',
    tier: 'First Class',
    name: 'BMW i7 xDrive60',
    tagline: 'Electric Whisper. Imperial Presence.',
    image: 'https://images.pexels.com/photos/18029637/pexels-photo-18029637.jpeg',
    specs: { passengers: 3, luggage: 3, wifi: true, leather: true },
    features: ['Zero-Emission Drivetrain', 'Theatre Screen 31"', 'Silent Cabin Tech'],
  },
  {
    id: 'audi-a8',
    tier: 'First Class',
    name: 'Audi A8 L',
    tagline: 'Vorsprung Through Refinement',
    image: 'https://images.pexels.com/photos/26691322/pexels-photo-26691322.jpeg',
    specs: { passengers: 3, luggage: 3, wifi: true, leather: true },
    features: ['Quattro All-Wheel Drive', 'Bang & Olufsen Audio', 'Rear Massage Seats'],
  },
  {
    id: 'cadillac-escalade',
    tier: 'Ultra Luxury SUV',
    name: 'Cadillac Escalade',
    tagline: 'Authoritative Presence, Uncompromised Comfort',
    image: 'https://images.pexels.com/photos/18441129/pexels-photo-18441129.jpeg',
    specs: { passengers: 6, luggage: 6, wifi: true, leather: true },
    features: ['Captain Chairs', 'Panoramic Roof', 'Tinted Privacy Glass'],
  },
  {
    id: 'cadillac-escalade-esv',
    tier: 'Ultra Luxury SUV',
    name: 'Cadillac Escalade ESV',
    tagline: 'Extended for Executive Convoys',
    image: 'https://images.pexels.com/photos/23319054/pexels-photo-23319054.jpeg',
    specs: { passengers: 7, luggage: 8, wifi: true, leather: true },
    features: ['Extended Cargo Hold', 'AKG Studio Audio', 'Rear Entertainment Suite'],
  },
  {
    id: 'cadillac-escalade-v',
    tier: 'Ultra Luxury SUV',
    name: 'Cadillac Escalade-V',
    tagline: '682 HP of Executive Authority',
    image: 'https://images.pexels.com/photos/18441129/pexels-photo-18441129.jpeg',
    specs: { passengers: 6, luggage: 6, wifi: true, leather: true },
    features: ['Supercharged V8', 'Magnetic Ride Control', 'Performance Brakes'],
  },
  {
    id: 'range-rover-autobiography',
    tier: 'Ultra Luxury SUV',
    name: 'Range Rover Autobiography',
    tagline: 'British Sovereignty, Off-Road Mastery',
    image: 'https://images.pexels.com/photos/37094847/pexels-photo-37094847.jpeg',
    specs: { passengers: 5, luggage: 5, wifi: true, leather: true },
    features: ['Semi-Aniline Leather', 'Meridian Signature Audio', 'Executive Class Comfort Plus'],
  },
];

export const pillars = [
  {
    id: 'punctuality',
    title: 'Absolute Punctuality',
    description:
      'Real-time tracking protocols and meticulously orchestrated logistics ensure your chauffeur arrives precisely when expected — every time.',
    icon: 'Clock',
  },
  {
    id: 'protocol',
    title: 'Elite Chauffeur Protocol',
    description:
      'Each chauffeur undergoes rigorous vetting, advanced driving certifications, and continuous training in international etiquette and discretion.',
    icon: 'ShieldCheck',
  },
  {
    id: 'security',
    title: 'Discreet Security',
    description:
      'Absolute confidentiality of your itinerary, conversations, and personal data — guarded by ironclad operational protocols and trained professionals.',
    icon: 'Lock',
  },
];

export const navLinks = [
  { label: 'Services', href: '#services' },
  { label: 'Fleet', href: '#fleet' },
  { label: 'Corporate', href: '#corporate' },
  { label: 'Contact', href: '#contact' },
];

export const heroImage =
  'https://images.pexels.com/photos/15071553/pexels-photo-15071553.jpeg';

export const interiorImage =
  'https://images.pexels.com/photos/27692895/pexels-photo-27692895.jpeg';
