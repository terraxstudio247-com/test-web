import React from 'react';

const Services = () => {
  const items = [
    {
      title: 'Airport Transfers',
      desc: 'Seamless meet-and-greet protocols, flight monitoring, and complimentary wait time at every major hub.',
    },
    {
      title: 'Hourly Chauffeur',
      desc: 'A dedicated vehicle and chauffeur at your disposal for meetings, events, and city itineraries.',
    },
    {
      title: 'Corporate Roadshows',
      desc: 'Multi-city coordination for executive teams, with dedicated account managers and 24/7 oversight.',
    },
    {
      title: 'VIP & Diplomatic',
      desc: 'Discreet protective transport with vetted chauffeurs trained in international protocol and security.',
    },
  ];

  return (
    <section id="services" className="relative bg-[#0B0C10] py-28 md:py-36 border-t border-[#E5E5E5]/5">
      <div className="max-w-7xl mx-auto px-6 md:px-10 grid lg:grid-cols-12 gap-14">
        <div className="lg:col-span-4">
          <div className="flex items-center gap-4 mb-6">
            <span className="h-px w-10 bg-[#C5A059]/70" />
            <span className="text-[10px] uppercase tracking-[0.5em] text-[#C5A059]">
              Services
            </span>
          </div>
          <h2 className="font-serif text-4xl md:text-5xl text-[#E5E5E5] leading-tight">
            A Discreet Standard of Excellence.
          </h2>
          <p className="mt-6 text-[#E5E5E5]/60 font-light leading-relaxed">
            From international arrivals to multi-day corporate engagements, every Maza Elite
            journey is choreographed end to end.
          </p>
        </div>

        <div className="lg:col-span-8 grid sm:grid-cols-2 gap-px bg-[#E5E5E5]/10">
          {items.map((it, idx) => (
            <div
              key={it.title}
              className="group bg-[#0B0C10] p-8 md:p-10 hover:bg-[#1F2833]/40 transition-colors duration-500"
            >
              <span className="font-serif text-xs tracking-[0.4em] text-[#C5A059]/60">
                0{idx + 1}
              </span>
              <h3 className="mt-5 font-serif text-2xl text-[#E5E5E5]">{it.title}</h3>
              <p className="mt-4 text-[#E5E5E5]/60 font-light leading-relaxed">{it.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Services;
