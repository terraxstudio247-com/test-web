// Mock data for Laxora chauffeur service

// Category slugs match the filter labels
export const categories = [
  { id: 'all', label: 'ALL' },
  { id: 'bus', label: 'BUS & COACHES' },
  { id: 'buggy', label: 'DUNE-BUGGY' },
  { id: 'sedan', label: 'SEDAN' },
  { id: 'suv', label: 'SUVS' },
  { id: 'van', label: 'VAN & MPVS' },
];

export const fleetData = [
  // ===== SUVS =====
  {
    id: 'gmc-yukon-xl',
    category: 'suv',
    name: 'GMC YUKON XL',
    image: 'https://images.unsplash.com/photo-1615908397724-6dc711db34a7?auto=format&fit=crop&w=1200&q=80',
    passengers: 7,
    bags: '7 - 8',
  },
  {
    id: 'gmc-yukon-xl-black',
    category: 'suv',
    name: 'GMC YUKON XL BLACK',
    image: 'https://images.pexels.com/photos/18441129/pexels-photo-18441129.jpeg?auto=compress&cs=tinysrgb&w=1200',
    passengers: 7,
    bags: '7 - 8',
  },
  {
    id: 'cadillac-escalade',
    category: 'suv',
    name: 'CADILLAC ESCALADE',
    image: 'https://images.pexels.com/photos/23319054/pexels-photo-23319054.jpeg?auto=compress&cs=tinysrgb&w=1200',
    passengers: 6,
    bags: '6 - 7',
  },
  {
    id: 'range-rover-autobiography',
    category: 'suv',
    name: 'RANGE ROVER AUTOBIOGRAPHY',
    image: 'https://images.pexels.com/photos/37094847/pexels-photo-37094847.jpeg?auto=compress&cs=tinysrgb&w=1200',
    passengers: 5,
    bags: '4 - 5',
  },
  // ===== SEDANS =====
  {
    id: 'audi-a6',
    category: 'sedan',
    name: 'AUDI A6 SIGNED',
    image: 'https://images.pexels.com/photos/18029642/pexels-photo-18029642.jpeg?auto=compress&cs=tinysrgb&w=1200',
    passengers: 4,
    bags: '2 - 3',
  },
  {
    id: 'lexus-es300h',
    category: 'sedan',
    name: 'LEXUS ES300H',
    image: 'https://images.pexels.com/photos/7985342/pexels-photo-7985342.jpeg?auto=compress&cs=tinysrgb&w=1200',
    passengers: 4,
    bags: '2',
  },
  {
    id: 'mercedes-benz-s500',
    category: 'sedan',
    name: 'MERCEDES BENZ S500',
    image: 'https://images.pexels.com/photos/26691322/pexels-photo-26691322.jpeg?auto=compress&cs=tinysrgb&w=1200',
    passengers: 3,
    bags: '2',
  },
  {
    id: 'bmw-7-series',
    category: 'sedan',
    name: 'BMW 7 SERIES',
    image: 'https://images.pexels.com/photos/18029637/pexels-photo-18029637.jpeg?auto=compress&cs=tinysrgb&w=1200',
    passengers: 3,
    bags: '2 - 3',
  },
  {
    id: 'mercedes-maybach-s580',
    category: 'sedan',
    name: 'MERCEDES MAYBACH S580',
    image: 'https://images.pexels.com/photos/28720713/pexels-photo-28720713.jpeg?auto=compress&cs=tinysrgb&w=1200',
    passengers: 2,
    bags: '2',
  },
  // ===== VAN & MPVS =====
  {
    id: 'mercedes-class-v250',
    category: 'van',
    name: 'MERCEDES CLASS V250',
    image: 'https://images.pexels.com/photos/18029635/pexels-photo-18029635.jpeg?auto=compress&cs=tinysrgb&w=1200',
    passengers: 7,
    bags: '7 - 8',
  },
  {
    id: 'toyota-hiace',
    category: 'van',
    name: 'TOYOTA HIACE COMMUTER',
    image: 'https://images.pexels.com/photos/18029635/pexels-photo-18029635.jpeg?auto=compress&cs=tinysrgb&w=1200',
    passengers: 13,
    bags: '10 - 12',
  },
  // ===== BUS & COACHES =====
  {
    id: 'luxury-coach-50',
    category: 'bus',
    name: 'MERCEDES TOURISMO 50',
    image: 'https://images.unsplash.com/photo-1605068263928-dc295689add1?auto=format&fit=crop&w=1200&q=80',
    passengers: 50,
    bags: '40 - 50',
  },
  // ===== DUNE-BUGGY =====
  {
    id: 'polaris-rzr-buggy',
    category: 'buggy',
    name: 'POLARIS RZR DUNE BUGGY',
    image: 'https://images.unsplash.com/photo-1686917438932-b53e0f49f6db?auto=format&fit=crop&w=1200&q=80',
    passengers: 2,
    bags: '1',
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

// Contact info used by Whatsapp / Call CTAs
export const contactInfo = {
  whatsapp: '+971500000000',
  phone: '+971500000000',
};
