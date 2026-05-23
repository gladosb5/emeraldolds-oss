<?php
function filterChatContent($content) {
    // Cookie Run Kingdom names + Fanfiction phrases banned
    $forbiddenWords = array(
        // Already existing banned words
        "skibidi",
        "crk",
        "cookie run kingdom",

        // Fanfiction titles and key phrases
        "Squid Game Fanfiction",
        "Ji-yeong", "Sae-byeok",
        "Jock and Goth",
        "Nanno Character.AI Bot Story",
        "Nanno",
        "Man Craving",
        "Villain Izuku",
        "My Hero Academia",
        "Deku", "Bakugo", "Kirishima", "Tenya Iida", "Shoto",
        
        // All Cookie names
        "GingerBrave", "Strawberry Cookie", "Ninja Cookie", "Angel Cookie", "Muscle Cookie", "Wizard Cookie", "Beet Cookie",
        "Devil Cookie", "Custard Cookie III", "Clover Cookie", "Carrot Cookie", "Avocado Cookie", "Pancake Cookie", "Onion Cookie",
        "Gumball Cookie", "Blackberry Cookie", "Adventurer Cookie", "Alchemist Cookie", "Cherry Cookie", "Knight Cookie", "Princess Cookie",
        "Marshmallow Bunny Cookie", "Cream Ferret Cookie", "Icicle Yeti Cookie", "Snapdragon Cookie", "Jung Kook Cookie", "V Cookie",
        "Jimin Cookie", "j-hope Cookie", "SUGA Cookie", "Jin Cookie", "RM Cookie", "Sonic Cookie", "Tails Cookie",
        "Cream Soda Cookie", "Pavlova Cookie", "Wedding Cake Cookie", "Black Forest Cookie", "Black Sapphire Cookie", "Candy Apple Cookie",
        "Green Tea Mousse Cookie", "Pudding à la Mode Cookie", "Choco Drizzle Cookie", "Red Osmanthus Cookie", "Golden Osmanthus Cookie",
        "Smoked Cheese Cookie", "Star Coral Cookie", "Peach Blossom Cookie", "Caramel Choux Cookie", "Butter Roll Cookie", "Matcha Cookie",
        "Linzer Cookie", "Crème Brûlée Cookie", "Olive Cookie", "Mozzarella Cookie", "Fettuccine Cookie", "Burnt Cheese Cookie",
        "Frilled Jellyfish Cookie", "Peppermint Cookie", "Black Lemonade Cookie", "Tarte Tatin Cookie", "Royal Margarine Cookie",
        "Kouign-Amann Cookie", "Prune Juice Cookie", "Blueberry Pie Cookie", "Milky Way Cookie", "Space Doughnut Cookie", "Rockstar Cookie",
        "Prophet Cookie", "Pinecone Cookie", "Carol Cookie", "Macaron Cookie", "Schwarzwälder Cookie", "Candy Diver Cookie",
        "Captain Caviar Cookie", "Cream Unicorn Cookie", "Financier Cookie", "Crunchy Chip Cookie", "Wildberry Cookie", "Cherry Blossom Cookie",
        "Caramel Arrow Cookie", "Affogato Cookie", "Tea Knight Cookie", "Eclair Cookie", "Cocoa Cookie", "Cotton Cookie", "Pumpkin Pie Cookie",
        "Twizzly Gummy Cookie", "Mala Sauce Cookie", "Moon Rabbit Cookie", "Raspberry Cookie", "Parfait Cookie", "Sorbet Shark Cookie",
        "Squid Ink Cookie", "Lilac Cookie", "Mango Cookie", "Red Velvet Cookie", "Pastry Cookie", "Fig Cookie", "Strawberry Crepe Cookie",
        "Black Raisin Cookie", "Almond Cookie", "Latte Cookie", "Cream Puff Cookie", "Kumiho Cookie", "Werewolf Cookie", "Vampire Cookie",
        "Tiger Lily Cookie", "Sparkling Cookie", "Snow Sugar Cookie", "Rye Cookie", "Purple Yam Cookie", "Pomegranate Cookie",
        "Poison Mushroom Cookie", "Mint Choco Cookie", "Milk Cookie", "Madeleine Cookie", "Licorice Cookie", "Herb Cookie", "Espresso Cookie",
        "Dark Choco Cookie", "Chili Pepper Cookie", "Camellia Cookie", "Elder Faerie Cookie", "Crimson Coral Cookie", "Shining Glitter Cookie",
        "Capsaicin Cookie", "Stardust Cookie", "Sherbet Cookie", "Oyster Cookie", "Clotted Cream Cookie", "Pitaya Dragon Cookie",
        "Fire Spirit Cookie", "Wind Archer Cookie", "Stormbringer Cookie", "Moonlight Cookie", "Black Pearl Cookie", "Frost Queen Cookie",
        "Sea Fairy Cookie", "Pure Vanilla Cookie", "Hollyberry Cookie", "Dark Cacao Cookie", "Golden Cheese Cookie", "White Lily Cookie",
        "Dark Cacao Cookie (Dragon Lord)", "Golden Cheese Cookie (Immortal)", "Pure Vanilla Cookie (Compassionate)",
        "Hollyberry Cookie (Aegis)", "Mystic Flour Cookie", "Burning Spice Cookie", "Shadow Milk Cookie", "Eternal Sugar Cookie",
        "Rainbow Sherbet Cookie", "Young Kulfi", "Twisted Donut Cookie", "Witchberry Cookie", "Mystic Opal Cookie", "Gold Citrine Cookie",
        "Aquamarine Cookie", "Aladdin Cookie", "Alice Cookie", "Ariel Cookie", "Beast Cookie", "Belle Cookie", "Cinderella Cookie",
        "Daisy Duck Cookie", "Donald Duck Cookie", "Goofy Cookie", "Jasmine Cookie", "Lilo Cookie", "Mickey Mouse Cookie", "Minnie Mouse Cookie",
        "Mulan Cookie", "Peter Pan Cookie", "Pocahontas Cookie", "Princess Aurora Cookie", "Snow White Cookie", "Stitch Cookie",
        "Tinker Bell Cookie"
    );

    $filteredContent = $content;

    foreach ($forbiddenWords as $word) {
        $filteredContent = preg_replace("/\\b" . preg_quote($word, '/') . "\\b/i", "[Content Deleted]", $filteredContent);
    }

    // Block any generic "[something] cookie" phrases
    $filteredContent = preg_replace("/\\b[a-z]+(?:\\s[a-z]+)* cookie\\b/i", "[Content Deleted]", $filteredContent);

    return $filteredContent;
}
?>
