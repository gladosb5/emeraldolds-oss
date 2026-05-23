<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Script" referent="RBX0">
		<Properties>
			<bool name="Disabled">false</bool>
			<Content name="LinkedSource"><null></null></Content>
			<string name="Name">VoteKicker</string>
			<ProtectedString name="Source">print(&quot;Vote Kicker 1.0 Loaded&quot;)
---------------------------------------------------
-- This script adds the &quot;kick&quot; command to your game.
-- Players can type &quot;kick [player name]&quot; to vote to kick an abusive player.
-- If enough people vote to kick the same person, that person contracts a deadly case of NoTorsoItis
-- There is no cure for NoTorsoItis, even rejoining the game doesn&apos;t stop it.
-- The number of votes required to kick a player depends on the number of people in the game.
-- 
-- One cool thing - you don&apos;t need to type the player&apos;s full name, just enough letters to be sure of who you
-- want to kick.
--
-- For example: if Builderman and Builderdude are in-game, &quot;kick builderm&quot; is enough
-- if Builderman and Telamon are the only people in the game, you can vote to kick both
-- by typing &quot;kick b t&quot;
--
-- Multiple votes from the same person are ignored. As are ambigious votes:
-- Example: Builderman and Builderdude are in-game. &quot;kick bu&quot; is ambigious.
---------------------------------------------------


-- This hack brought to you by Telamon. 

-- If you find bugs in this script, post them to the scripting forum.
-- If you find a bug and change the script to fix it, post your solution in the scripting forum. There is a 500 R$ bonus for each fix.

kickedlist = {}

voteMatrix = {}


function onPlayerEntered(newPlayer)


	local stats = Instance.new(&quot;IntValue&quot;)
	stats.Name = &quot;punkstats&quot;

	local votes = Instance.new(&quot;IntValue&quot;)
	votes.Name = &quot;votes&quot;
	votes.Value = 0

	


	votes.Parent = stats


	-- VERY UGLY HACK
	-- Will this leak threads?
	-- Is the problem even what I think it is (player arrived before character)?
	while true do
		if newPlayer.Character ~= nil then break end
		wait(5)
	end

	-- start to listen for new humanoid
	newPlayer.Changed:connect(function(property) onPlayerRespawn(property, newPlayer) end )

	stats.Parent = newPlayer

	newPlayer.Chatted:connect(function(msg, recipient) onChatted(msg, recipient, newPlayer) end) 

	-- make sure this isn&apos;t a previously banned player re-entering the game

	for i = 1, #kickedlist do
		if (string.lower(newPlayer.Name) == kickedlist[i]) then
			banish(newPlayer)
		end
	end

end

function getVotesNeeded()
	local np = game.Players.NumPlayers
	
	if np &gt; 10 then return 4 end
	if np &gt; 4   then return 3 end
	return 2
	
end

function onPlayerRespawn(property, player)
	if property == &quot;Character&quot; and player.Character ~= nil then
		local stats = player:findFirstChild(&quot;punkstats&quot;)
		if (stats ~= nil) then
			if (stats:findFirstChild(&quot;banned&quot;) ~= nil) then
				punish(player)
			end
		end
	end
end

function banish(player)
	
	local stats = player:findFirstChild(&quot;punkstats&quot;)
	local votes = stats:findFirstChild(&quot;votes&quot;)

	if (stats ~= nil and votes ~= nil) then
		
		votes.Value = votes.Value + 1
		if (votes.Value &gt;= getVotesNeeded()) then
			local banned = Instance.new(&quot;IntValue&quot;)
			banned.Name  = &quot;banned&quot;
			banned.Parent = stats
			local message = Instance.new(&quot;Message&quot;)
			message.Text = &quot;You caught NoTorsoItis!&quot;
			message.Parent = player
			table.insert(kickedlist, string.lower(player.Name))
			punish(player)
		end
	end

	
end

function punish(player)
	-- called when we think the player has respawned
	while true do
			if player.Character ~= nil then break end
			wait(5)
	end

	player.Character.Torso.Parent = nil
end

function matchPlayer(str)
	-- find all players that start with the str
	-- if there is only one, match it
	-- 0 or 2+, don&apos;t match it
	local result = nil

	local players = game.Players:GetPlayers()

	for i = 1,#players do
		if (string.find(string.lower(players[i].Name), str) == 1) then
			if (result ~= nil) then return nil end
			result = players[i]
		end
	end

	return result
end

function voteAgainst(voter, victim)
	-- consult the voteMatrix to see if this guy has voted against that guy before

	-- voter is a string - all lowers
	-- victim is a player

	local votesList = voteMatrix[voter]

	if (votesList ~= nil) then
		local prior = votesList[string.lower(victim.Name)]
		if (prior ~= nil) then
			-- this dude voted against that dude before
			return
		end
	else
		voteMatrix[voter] = {}
	end

	-- insert the record
	voteMatrix[voter][string.lower(victim.Name)] = 1
	
	banish(victim)

end

function onChatted(msg, recipient, speaker)

	-- convert to all lower case

	local source = string.lower(speaker.Name)
	msg = string.lower(msg)

	
	-- vote to kick the following players
	-- &quot;kick telamon buildman wookong&quot;
	if (string.find(msg, &quot;kick&quot;) == 1) then --- msg starts with &quot;kick&quot;
		-- words and numbers
		for word in msg:gmatch(&quot;%w+&quot;) do 
			if word ~= &quot;kick&quot; then
				local p = matchPlayer(word)
				if p ~= nil then
					voteAgainst(source, p)
				end
			end
		end
	end
	

end


game.Players.ChildAdded:connect(onPlayerEntered)</ProtectedString>
			<bool name="archivable">true</bool>
		</Properties>
	</Item>
</roblox>


