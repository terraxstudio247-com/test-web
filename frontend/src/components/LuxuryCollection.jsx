import React, { useState } from 'react';
import { categories, fleetData, contactInfo } from '../mock';
import { Users, Briefcase, Phone, MessageCircle } from 'lucide-react';

const LuxuryCollection = ({ onDetails }) => {
  const [active, setActive] = useState('all');

  const filtered =
    active === 'all' ? fleetData : fleetData.filter((v) => v.category === active);

  const handleWhatsapp = (vehicle) => {
    const msg = encodeURIComponent(
      `Hello Laxora, I'd like to inquire about the ${vehicle.name}.`
    );
    const num = contactInfo.whatsapp.replace(/[^0-9]/g, '');
    window.open(`https://wa.me/${num}?text=${msg}`, '_blank');
  };

  const handleCall = () => {
    window.location.href = `tel:${contactInfo.phone}`;
  };

  return (
    <section id="fleet" className="relative bg-white py-20 md:py-28">
      <div className="max-w-7xl mx-auto px-6 md:px-10">
        {/* Header */}
        <div className="text-center max-w-3xl mx-auto mb-12">
          <span className="inline-block px-4 py-1.5 mb-5 text-[10px] uppercase tracking-[0.32em] font-semibold rounded-full bg-[#7E22CE]/10 text-[#7E22CE]">
            The Laxora Fleet
          </span>
          <h2 className="font-serif text-4xl md:text-5xl leading-tight">
            <span className="text-[#0B1F45]">Check our </span>
            <span className="bg-gradient-to-r from-[#7E22CE] via-[#0B1F45] to-[#14B8A6] bg-clip-text text-transparent">Luxury Collection</span>
          </h2>
          <p className="mt-5 text-gray-600 text-base md:text-lg leading-relaxed">
            Laxora curates a premier portfolio of executive vehicles — from
            chauffeur-driven sedans and ultra-luxury SUVs to MPVs and coaches —
            delivering an uncompromised standard of comfort, privacy, and
            punctuality across every journey.
          </p>
        </div>

        {/* Filter pills */}
        <div className="flex flex-wrap items-center justify-center gap-3 md:gap-4 mb-14">
          {categories.map((c) => {
            const isActive = active === c.id;
            return (
              <button
                key={c.id}
                onClick={() => setActive(c.id)}
                className={`px-6 md:px-8 py-3 rounded-full text-[11px] md:text-xs font-semibold tracking-wider transition-colors duration-300 ${
                  isActive
                    ? 'bg-[#7E22CE] text-white shadow-md shadow-[#7E22CE]/20'
                    : 'bg-[#0B1F45] text-white hover:bg-[#152d63]'
                }`}
              >
                {c.label}
              </button>
            );
          })}
        </div>

        {/* Grid */}
        <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-7">
          {filtered.map((v) => {
            const catColors = {
              suv: '#14B8A6',
              sedan: '#C5A059',
              van: '#A855F7',
              bus: '#3B82F6',
              buggy: '#F97316',
            };
            const accent = catColors[v.category] || '#0B1F45';
            return (
            <article
              key={v.id}
              className="bg-white border border-gray-200 overflow-hidden shadow-[0_2px_12px_rgba(11,31,69,0.06)] hover:shadow-[0_8px_28px_rgba(11,31,69,0.14)] transition-shadow duration-300 flex flex-col group"
            >
              {/* Image */}
              <div className="relative aspect-[16/11] overflow-hidden bg-gray-100">
                <img
                  src={v.image}
                  alt={v.name}
                  className="w-full h-full object-cover group-hover:scale-[1.04] transition-transform duration-700 ease-out"
                  loading="lazy"
                />
                <span
                  className="absolute top-3 left-3 px-3 py-1 text-[9px] uppercase tracking-[0.18em] font-semibold text-white rounded-full"
                  style={{ backgroundColor: accent }}
                >
                  {(categories.find((c) => c.id === v.category) || {}).label || v.category}
                </span>
              </div>

              {/* Title */}
              <div
                className="h-[3px] w-full"
                style={{ backgroundColor: accent }}
              />
              <div className="px-6 pt-6 pb-4 text-center">
                <h3 className="text-[#0B1F45] font-semibold tracking-[0.04em] text-base md:text-lg uppercase">
                  {v.name}
                </h3>
              </div>

              {/* Specs */}
              <div className="px-6 pb-6 flex items-center justify-center gap-5 text-[#0B1F45] text-sm">
                <span className="flex items-center gap-2">
                  <Users size={18} style={{ color: accent }} strokeWidth={2} />
                  <span className="font-medium">{v.passengers} Passengers</span>
                </span>
                <span className="h-5 w-px bg-gray-300" />
                <span className="flex items-center gap-2">
                  <Briefcase size={18} style={{ color: accent }} strokeWidth={2} />
                  <span className="font-medium">{v.bags} Bags</span>
                </span>
              </div>

              {/* Actions */}
              <div className="mt-auto px-5 pb-5 grid grid-cols-3 gap-3">
                <button
                  onClick={() => handleWhatsapp(v)}
                  className="flex items-center justify-center gap-1.5 bg-[#0B1F45] hover:bg-[#152d63] text-white text-xs md:text-sm font-medium py-3 rounded-md transition-colors duration-300"
                >
                  <MessageCircle size={15} strokeWidth={2} />
                  Whatsapp
                </button>
                <button
                  onClick={handleCall}
                  className="flex items-center justify-center gap-1.5 bg-[#0B1F45] hover:bg-[#152d63] text-white text-xs md:text-sm font-medium py-3 rounded-md transition-colors duration-300"
                >
                  <Phone size={15} strokeWidth={2} />
                  Call
                </button>
                <button
                  onClick={() => onDetails && onDetails(v)}
                  className="flex items-center justify-center bg-[#0B1F45] hover:bg-[#152d63] text-white text-xs md:text-sm font-medium py-3 rounded-md transition-colors duration-300"
                >
                  Details
                </button>
              </div>
            </article>
            );
          })}
        </div>

        {filtered.length === 0 && (
          <div className="text-center text-gray-500 py-20">
            No vehicles available in this category yet — please check back soon.
          </div>
        )}
      </div>
    </section>
  );
};

export default LuxuryCollection;
