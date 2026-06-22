import React from 'react';
import { interiorImage } from '../mock';

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
            From international arrivals to multi-day corporate engagements, every Laxora
            journey is choreographed end to end.
          </p>

          {/* Decorative image */}
          <div className="mt-10 relative aspect-[4/5] max-w-[320px] overflow-hidden border border-[#E5E5E5]/8">
            <img
              src={interiorImage}
              alt="Laxora chauffeur interior"
              className="w-full h-full object-cover opacity-85 hover:opacity-100 hover:scale-[1.04] transition-all duration-700"
              loading="lazy"
            />
            <div className="absolute inset-0 bg-gradient-to-t from-[#0B0C10] via-transparent to-transparent" />
            <div className="absolute bottom-5 left-5 right-5">
              <p className="text-[10px] uppercase tracking-[0.32em] text-[#C5A059] mb-1">
                Onboard
              </p>
              <p className="font-serif text-xl text-[#E5E5E5] leading-tight">
                A private sanctuary in motion.
              </p>
            </div>
          </div>
        </div>

        <div className="lg:col-span-8 grid sm:grid-cols-2 gap-px bg-[#E5E5E5]/10">
          {items.map((it, idx) => {
            const colors = ['#14B8A6', '#C5A059', '#A855F7', '#F472B6'];
            const c = colors[idx % colors.length];
            return (
              <div
                key={it.title}
                className="group bg-[#0B0C10] p-8 md:p-10 hover:bg-[#1F2833]/40 transition-colors duration-500"
              >
                <span
                  className="inline-flex items-center justify-center w-10 h-10 rounded-full font-serif text-sm"
                  style={{ backgroundColor: `${c}1A`, color: c }}
                >
                  0{idx + 1}
                </span>
                <h3 className="mt-5 font-serif text-2xl text-[#E5E5E5]">{it.title}</h3>
                <p className="mt-4 text-[#E5E5E5]/60 font-light leading-relaxed">{it.desc}</p>
                <div
                  className="mt-6 h-[2px] w-10 group-hover:w-20 transition-[width] duration-500"
                  style={{ backgroundColor: c }}
                />
              </div>
            );
          })}
        </div>
      </div>
    </section>
  );
};

export default Services;
