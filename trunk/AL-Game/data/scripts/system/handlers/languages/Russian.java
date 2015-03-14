/**
 * This file is part of Aion-Lightning <aion-lightning.org>.
 *
 *  Aion-Lightning is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  Aion-Lightning is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details. *
 *  You should have received a copy of the GNU General Public License
 *  along with Aion-Lightning.
 *  If not, see <http://www.gnu.org/licenses/>.
 */
 
package languages;

import com.aionemu.gameserver.utils.i18n.CustomMessageId;
import com.aionemu.gameserver.utils.i18n.Language;

public class Russian extends Language {
    public Russian() {
        super("ru");
        addSupportedLanguage("ru_RU");
        addTranslatedMessage(CustomMessageId.SERVER_REVISION, "Версия сервера : %-6s");
        addTranslatedMessage(CustomMessageId.WELCOME_PREMIUM, "Добро пожаловать");
        addTranslatedMessage(CustomMessageId.WELCOME_REGULAR, "Добро пожаловать");
        addTranslatedMessage(CustomMessageId.WELCOME_BASIC, "Добро пожаловать");
        addTranslatedMessage(CustomMessageId.SERVERVERSION, "Поддерживаемые NCSoft Версия");
		addTranslatedMessage(CustomMessageId.ENDMESSAGE, "Веселиться.");
		addTranslatedMessage(CustomMessageId.ANNOUNCE_GM_CONNECTION, "теперь доступен за поддержку!");
		addTranslatedMessage(CustomMessageId.ANNOUNCE_GM_DECONNECTION, "Сейчас недоступны за поддержку!");
		addTranslatedMessage(CustomMessageId.ANNOUNCE_MEMBER_CONNECTION, "%s только что вступили в Atreia.");
        addTranslatedMessage(CustomMessageId.COMMAND_NOT_ENOUGH_RIGHTS, "У вас нет прав, чтобы использовать эту команду");
        addTranslatedMessage(CustomMessageId.PLAYER_NOT_ONLINE, "Такого игрока нет в сейчас игре");
        addTranslatedMessage(CustomMessageId.INTEGER_PARAMETER_REQUIRED, "Параметр должен содержать цифры");
        addTranslatedMessage(CustomMessageId.INTEGER_PARAMETERS_ONLY, "Параметры должны быть цифрами");
        addTranslatedMessage(CustomMessageId.SOMETHING_WRONG_HAPPENED, "Произошла ошибка");
        addTranslatedMessage(CustomMessageId.COMMAND_DISABLED, "Команда неактивна");
        addTranslatedMessage(CustomMessageId.COMMAND_ADD_SYNTAX, "Синтекс: //add <имя игрока> <id предмета> [<количество>]");
        addTranslatedMessage(CustomMessageId.COMMAND_ADD_ADMIN_SUCCESS, "Предмет(ы) успешно добавлен игроку %s");
        addTranslatedMessage(CustomMessageId.COMMAND_ADD_PLAYER_SUCCESS, "Администратор %s дал вам %d предмет(ы)");
        addTranslatedMessage(CustomMessageId.COMMAND_ADD_FAILURE, "Предмет %d не существует и/или не может быть добавлен %s");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDDROP_SYNTAX, "Синтекс: //adddrop <id моба> <id вещи> <min> <max> <шанс>");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDSET_SYNTAX, "Синтекс: //addset <имя игрока> <id сета>");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDSET_SET_DOES_NOT_EXISTS, "Сет %d не существует");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDSET_NOT_ENOUGH_SLOTS, "Не хватает %d слотов в инвентаре, чтобы добавить этот сет");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDSET_CANNOT_ADD_ITEM, "Предмет %d не может быть добавлен к %s");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDSET_ADMIN_SUCCESS, "Сет %d успешно добавлен %s");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDSET_PLAYER_SUCCESS, "%s дал вам сет");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDSKILL_SYNTAX, "Синтекс: //addskill <id скилла> <уровен скилла");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDSKILL_ADMIN_SUCCESS, "Скилл %d успешно добавлен %s");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDSKILL_PLAYER_SUCCESS, "%s дал вам скилл");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDTITLE_SYNTAX, "Синтекс: //addtitle <id титула> <имя игрока> [special]");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDTITLE_TITLE_INVALID, "Титул должен быть от 1 до 50");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDTITLE_CANNOT_ADD_TITLE_TO_ME, "Ва не можете дать титул %d себе");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDTITLE_CANNOT_ADD_TITLE_TO_PLAYER, "Невозможно дыть титул %d к %s");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDTITLE_ADMIN_SUCCESS_ME, "Вы успешно добавили титул %d себе");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDTITLE_ADMIN_SUCCESS, "Вы успешно дали игроку %s титул %d");
        addTranslatedMessage(CustomMessageId.COMMAND_ADDTITLE_PLAYER_SUCCESS, "%s дал вам титул %d");
        addTranslatedMessage(CustomMessageId.COMMAND_SEND_SYNTAX, "Синтекс: //send <имя файла>");
        addTranslatedMessage(CustomMessageId.COMMAND_SEND_MAPPING_NOT_FOUND, "%s не найдено");
        addTranslatedMessage(CustomMessageId.COMMAND_SEND_NO_PACKET, "Пакет не послан");
        addTranslatedMessage(CustomMessageId.CHANNEL_WORLD_DISABLED, "Канал %s закрыт, используйте канал %s или %s исходя из вашей расы");
        addTranslatedMessage(CustomMessageId.CHANNEL_ALL_DISABLED, "Все каналы деактивированы");
        addTranslatedMessage(CustomMessageId.CHANNEL_ALREADY_FIXED, "Ваш канал успешно установлен %s");
        addTranslatedMessage(CustomMessageId.CHANNEL_FIXED, "Установлен канал %s");
        addTranslatedMessage(CustomMessageId.CHANNEL_NOT_ALLOWED, "Вы не можете использовать этот канал");
        addTranslatedMessage(CustomMessageId.CHANNEL_FIXED_BOTH, "Установлены каналы %s и %s");
        addTranslatedMessage(CustomMessageId.CHANNEL_UNFIX_HELP, "Впишите %s чтобы выйти из канала"); // ;)
        addTranslatedMessage(CustomMessageId.CHANNEL_NOT_FIXED, "Вы не установлены на канал");
        addTranslatedMessage(CustomMessageId.CHANNEL_FIXED_OTHER, "Ваш чат не установлен на этом канале, но на %s");
        addTranslatedMessage(CustomMessageId.CHANNEL_RELEASED, "Вы вышли из канала %s");
        addTranslatedMessage(CustomMessageId.CHANNEL_RELEASED_BOTH, "Вы вышли из %s и %s");
        addTranslatedMessage(CustomMessageId.CHANNEL_BAN_ENDED, "Вы можете опять присоединиться к каналам");
        addTranslatedMessage(CustomMessageId.CHANNEL_BAN_ENDED_FOR, "Игрок %s снова может присоединяться к каналам");
        addTranslatedMessage(CustomMessageId.CHANNEL_BANNED, "Вы не можете войти на канал, так как %s забанил вас по причине: %s, до разблокировки осталось: %s");
        addTranslatedMessage(CustomMessageId.COMMAND_MISSING_SKILLS_STIGMAS_ADDED, "%d умения %d стигма даны вам");
        addTranslatedMessage(CustomMessageId.COMMAND_MISSING_SKILLS_ADDED, "%d умение дано вам");
        addTranslatedMessage(CustomMessageId.USER_COMMAND_DOES_NOT_EXIST, "Этой игровой команды не существует");
        addTranslatedMessage(CustomMessageId.COMMAND_XP_DISABLED, "Начисление XP отключено. Введите .xpon чтобы разблокировать");
        addTranslatedMessage(CustomMessageId.COMMAND_XP_ALREADY_DISABLED, "Начисление XP отключено");
        addTranslatedMessage(CustomMessageId.COMMAND_XP_ENABLED, "Начисление XP включено");
        addTranslatedMessage(CustomMessageId.COMMAND_XP_ALREADY_ENABLED, "Начисление XP уже включено");
		addTranslatedMessage(CustomMessageId.DREDGION_LEVEL_TOO_LOW, "Your current level is too low to enter the Dredgion.");
		addTranslatedMessage(CustomMessageId.DEFAULT_FINISH_MESSAGE, "Finish!");

		/**
		 * Asmo and Ely Channel
		 */
		addTranslatedMessage(CustomMessageId.ASMO_FAIL, "You are Elyos! You can not use this chat. Ely <message> to post a new faction chat!");
		addTranslatedMessage(CustomMessageId.ELY_FAIL, "You are Asmo! You can not use this chat. Asmo <message> to post a new faction chat!");

		/**
		 * PvP Service
		 */
		addTranslatedMessage(CustomMessageId.ADV_WINNER_MSG, "[PvP System] You kill player ");
		addTranslatedMessage(CustomMessageId.ADV_LOSER_MSG, "[PvP System] You killed by ");
		addTranslatedMessage(CustomMessageId.PLAP_LOST1, "[PL-AP] You lost ");
		addTranslatedMessage(CustomMessageId.PLAP_LOST2, "% of your total ap");
		addTranslatedMessage(CustomMessageId.PVP_NO_REWARD1, "You dont won anything for killing ");
		addTranslatedMessage(CustomMessageId.PVP_NO_REWARD2, " because you killed him too often!");

		/**
		 * Reward Service Login Messages
		 */
		addTranslatedMessage(CustomMessageId.REWARD10, "You can. Start using a level to get 10 Features!");
		addTranslatedMessage(CustomMessageId.REWARD30, "You can. Start to use a Level 30 Equipment get!");
		addTranslatedMessage(CustomMessageId.REWARD40, "You can. Start using a level to get 40 Features!");
		addTranslatedMessage(CustomMessageId.REWARD50, "You can. Start a level use 50 features to get!");
		addTranslatedMessage(CustomMessageId.REWARD60, "You can. Start to use a Level 60 Features get!");

		/**
		 * Advanced PvP System
		 */
		addTranslatedMessage(CustomMessageId.PVP_ADV_MESSAGE1, "Today PvP Map: Reshanta");
		addTranslatedMessage(CustomMessageId.PVP_ADV_MESSAGE2, "Today PvP Map: Tiamaranta");
		addTranslatedMessage(CustomMessageId.PVP_ADV_MESSAGE3, "Today PvP Map: Inggison/Gelkmaros");
		addTranslatedMessage(CustomMessageId.PVP_ADV_MESSAGE4, "Today PvP Map: Idian Depths");
		addTranslatedMessage(CustomMessageId.PVP_ADV_MESSAGE5, "Today PvP Map: Katalam");
		addTranslatedMessage(CustomMessageId.PVP_ADV_MESSAGE6, "Today PvP Map: Danaria");

		/**
		 * Wedding related
		 */
		addTranslatedMessage(CustomMessageId.WEDDINGNO1, "You can not use this command during the fight!");
		addTranslatedMessage(CustomMessageId.WEDDINGNO2, "Wedding has not started!");
		addTranslatedMessage(CustomMessageId.WEDDINGNO3, "You refused to marry!");
		addTranslatedMessage(CustomMessageId.WEDDINGYES, "You have accepted the marriage!");

		/**
		 * Clean Command related
		 */
		addTranslatedMessage(CustomMessageId.CANNOTCLEAN, "You have to enter an Item ID, or post a link!");
		addTranslatedMessage(CustomMessageId.CANNOTCLEAN2, "You do not own this item!");
		addTranslatedMessage(CustomMessageId.SUCCESSCLEAN, "Item has been successfully removed from a cube!");

		/**
		 * Mission check command related
		 */
		addTranslatedMessage(CustomMessageId.SUCCESCHECKED, "Mission successfully checked!");

		/**
		 * No Exp Command
		 */
		addTranslatedMessage(CustomMessageId.EPACTIVATED, "Your EP were re-activated!");
		addTranslatedMessage(CustomMessageId.ACTODE, "To disable your EP, use noexp.");
		addTranslatedMessage(CustomMessageId.EPDEACTIVATED, "Your EP were disabled!");
		addTranslatedMessage(CustomMessageId.DETOAC, "To activate your EP, use noexp.");

		/**
		 * Auto Quest Command
		 */
		addTranslatedMessage(CustomMessageId.WRONGQID, "Please enter a correct quest Id!");
		addTranslatedMessage(CustomMessageId.NOTSTARTED, "Quest could not be started!");
		addTranslatedMessage(CustomMessageId.NOTSUPPORT, "This quest is not supported by this command!");

		/**
		 * Quest Restart Command
		 */
		addTranslatedMessage(CustomMessageId.CANNOTRESTART, "] can not be restarted");

		/**
		 * Exchange Toll Command
		 */
		addTranslatedMessage(CustomMessageId.TOLLTOBIG, "You have too many Toll!");
		addTranslatedMessage(CustomMessageId.TOLOWAP, "You do not have enough AP!");
		addTranslatedMessage(CustomMessageId.TOLOWTOLL, "You do not have enough Toll!");
		addTranslatedMessage(CustomMessageId.WRONGTOLLNUM, "Something went wrong!");

		/**
		 * Cube Command
		 */
		addTranslatedMessage(CustomMessageId.CUBE_ALLREADY_EXPANDED, "Your cube is fully extended!");
		addTranslatedMessage(CustomMessageId.CUBE_SUCCESS_EXPAND, "Your cube is successfully expanded!");

		/**
		 * GMList Command
		 */
		addTranslatedMessage(CustomMessageId.ONE_GM_ONLINE, "A team member is online: ");
		addTranslatedMessage(CustomMessageId.MORE_GMS_ONLINE, "The following team members online: ");
		addTranslatedMessage(CustomMessageId.NO_GM_ONLINE, "No team member online!");

		/**
		 * Go Command (PvP Command)
		 */
		addTranslatedMessage(CustomMessageId.NOT_USE_WHILE_FIGHT, "You can not use this command during the fight!");
		addTranslatedMessage(CustomMessageId.NOT_USE_ON_PVP_MAP, "You can not use this command on a PvP Map!");
		addTranslatedMessage(CustomMessageId.LEVEL_TOO_LOW, "You can use this command only with level 55 or higher to use!");

		/**
		 * Paint Command
		 */
		addTranslatedMessage(CustomMessageId.WRONG_TARGET, "Please use a legal target!");

		/**
		 * Shiva Command
		 */
		addTranslatedMessage(CustomMessageId.ENCHANT_SUCCES, "All your items have been enchanted to: ");
		addTranslatedMessage(CustomMessageId.ENCHANT_INFO, "Info: This command all your enchanted items on <value>!");
		addTranslatedMessage(CustomMessageId.ENCHANT_SAMPLE, "For example, would enchant all your items to 15 (eq 15.)");

		/**
		 * Userinfo Command
		 */
		addTranslatedMessage(CustomMessageId.CANNOT_SPY_PLAYER, "You can not get information from other players!");

		/**
		 * Check AFK Status
		 */
		addTranslatedMessage(CustomMessageId.KICKED_AFK_OUT, "You have been kicked out for being inactive too long.");

		/**
		 * Exchange Command
		 */
		addTranslatedMessage(CustomMessageId.NOT_ENOUGH_ITEM, "You dont have enough from: ");
		addTranslatedMessage(CustomMessageId.NOT_ENOUGH_AP, "You dont have enough ap, you only have: ");

		/**
		 * Medal Command
		 */
		addTranslatedMessage(CustomMessageId.NOT_ENOUGH_SILVER, "You dont have enough silver medals.");
		addTranslatedMessage(CustomMessageId.NOT_ENOUGH_GOLD, "You dont have enough gold medals.");
		addTranslatedMessage(CustomMessageId.NOT_ENOUGH_PLATIN, "You dont have enough platin medals.");
		addTranslatedMessage(CustomMessageId.NOT_ENOUGH_MITHRIL, "You dont have enough mithril medals.");
		addTranslatedMessage(CustomMessageId.NOT_ENOUGH_AP2, "You dont have enough ap, you need: ");
		addTranslatedMessage(CustomMessageId.EXCHANGE_SILVER, "You have exchange [item:186000031] to [item:186000030].");
		addTranslatedMessage(CustomMessageId.EXCHANGE_GOLD, "You have exchange [item:186000030] to [item:186000096].");
		addTranslatedMessage(CustomMessageId.EXCHANGE_PLATIN, "You have exchange [item:186000096] to [item:186000147].");
		addTranslatedMessage(CustomMessageId.EXCHANGE_MITHRIL, "You have exchange [item:186000147] to [item:186000223].");
		addTranslatedMessage(CustomMessageId.EX_SILVER_INFO, "\nSyntax: .medal silver - Exchange Silver to Gold.");
		addTranslatedMessage(CustomMessageId.EX_GOLD_INFO, "\nSyntax: .medal gold - Exchange Gold to Platin.");
		addTranslatedMessage(CustomMessageId.EX_PLATIN_INFO, "\nSyntax: .medal platinum - Exchnage Platin to Mithril.");
		addTranslatedMessage(CustomMessageId.EX_MITHRIL_INFO, "\nSyntax: .medal mithril - Exchange Mithril to Honorable Mithril.");

		/**
		 * Legendary Raid Spawn Events
		 */
		addTranslatedMessage(CustomMessageId.LEGENDARY_RAID_SPAWNED_ASMO, "[Spawn Event] Ragnarok was spawned for Asmodians at Beluslan!");
		addTranslatedMessage(CustomMessageId.LEGENDARY_RAID_SPAWNED_ELYOS, "[Spawn Event] Omega was spawned for Elyos at Heiron!");
		addTranslatedMessage(CustomMessageId.LEGENDARY_RAID_DESPAWNED_ASMO, "[Spawn Event] Ragnarok was unspawned, nobody kill him!");
		addTranslatedMessage(CustomMessageId.LEGENDARY_RAID_DESPAWNED_ELYOS, "[Spawn Event] Omega was unspawned, nobody kill him!");

		/**
		 * HonorItems Command
		 */
		addTranslatedMessage(CustomMessageId.PLATE_ARMOR, "Plate Armor");
		addTranslatedMessage(CustomMessageId.LEATHER_ARMOR, "Leather Armor");
		addTranslatedMessage(CustomMessageId.CLOTH_ARMOR, "Cloth Armor");
		addTranslatedMessage(CustomMessageId.CHAIN_ARMOR, "Chain Armor");
		addTranslatedMessage(CustomMessageId.WEAPONS, "Weapons");
		addTranslatedMessage(CustomMessageId.PLATE_ARMOR_PRICES, "Plate Armor Prices");
		addTranslatedMessage(CustomMessageId.LEATHER_ARMOR_PRICES, "Leather Armor Prices");
		addTranslatedMessage(CustomMessageId.CLOTH_ARMOR_PRICES, "Cloth Armor Prices");
		addTranslatedMessage(CustomMessageId.CHAIN_ARMOR_PRICES, "Chain Armor Prices");
		addTranslatedMessage(CustomMessageId.WEAPONS_PRICES, "Weapons Prices");
		addTranslatedMessage(CustomMessageId.NOT_ENOUGH_MEDALS, "You dont have enough Medals, you need: ");
		addTranslatedMessage(CustomMessageId.PLATE_ARMOR_USE_INFO, "Use .items and the equal ID (Example: .items 1");
		addTranslatedMessage(CustomMessageId.LEATHER_ARMOR_USE_INFO, "Use .items and the equal ID (Example: .items 6");
		addTranslatedMessage(CustomMessageId.CLOTH_ARMOR_USE_INFO, "Use .items and the equal ID (Example: .items 11");
		addTranslatedMessage(CustomMessageId.CHAIN_ARMOR_USE_INFO, "Use .items and the equal ID (Example: .items 16");
		addTranslatedMessage(CustomMessageId.WEAPONS_USE_INFO, "Use .items and the equal ID (Example: .items 21");
		addTranslatedMessage(CustomMessageId.SUCCESSFULLY_TRADED, "You got successfully your Trade!");

		/**
		 * Moltenus Announce
		 */
		addTranslatedMessage(CustomMessageId.MOLTENUS_APPEAR, "Moltenus Fragment of the Wrath has spawn in the Abyss.");
		addTranslatedMessage(CustomMessageId.MOLTENUS_DISAPPEAR, "Moltenus Fragment of the Wrath has disappear.");

		/**
		 * Dredgion Announce
		 */
		addTranslatedMessage(CustomMessageId.DREDGION_ASMO_GROUP, "An asmodian group is waiting for dredgion.");
		addTranslatedMessage(CustomMessageId.DREDGION_ELYOS_GROUP, "An elyos group is waiting for dredgion.");
		addTranslatedMessage(CustomMessageId.DREDGION_ASMO, "An alone asmodian is waiting for dredgion.");
		addTranslatedMessage(CustomMessageId.DREDGION_ELYOS, "An alone elyos is waiting for dredgion.");

		/**
		 * PvP Service
		 */
		addTranslatedMessage(CustomMessageId.PVP_TOLL_REWARD1, "You have earned");
		addTranslatedMessage(CustomMessageId.PVP_TOLL_REWARD2, " Abso'Points.");

		/**
		 * Invasion Rift
		 */
		addTranslatedMessage(CustomMessageId.INVASION_RIFT_MIN_LEVEL, "Your level is too low to enter.");
		addTranslatedMessage(CustomMessageId.INVASION_RIFT_ELYOS, "A rift for Pandaemonium is open at Ingisson");
		addTranslatedMessage(CustomMessageId.INVASION_RIFT_ASMOS, "A rift for Sanctum is open at Gelkmaros");

		/**
		 * PvP Spree Service
		 */
		addTranslatedMessage(CustomMessageId.SPREE1, "Bloody Storm");
		addTranslatedMessage(CustomMessageId.SPREE2, "Carnage");
		addTranslatedMessage(CustomMessageId.SPREE3, "Genocide");
		addTranslatedMessage(CustomMessageId.KILL_COUNT, "Kills in a row: ");
		addTranslatedMessage(CustomMessageId.CUSTOM_MSG1, " of ");
		addTranslatedMessage(CustomMessageId.MSG_SPREE1, " has started a ");
		addTranslatedMessage(CustomMessageId.MSG_SPREE1_1, " !");
		addTranslatedMessage(CustomMessageId.MSG_SPREE2, " is performing a true ");
		addTranslatedMessage(CustomMessageId.MSG_SPREE2_1, " ! Stop him fast !");
		addTranslatedMessage(CustomMessageId.MSG_SPREE3, " is doing a ");
		addTranslatedMessage(CustomMessageId.MSG_SPREE3_1, " ! Run away if you can!");
		addTranslatedMessage(CustomMessageId.SPREE_END_MSG1, "The killing spree of ");
		addTranslatedMessage(CustomMessageId.SPREE_END_MSG2, " has been stopped by ");
		addTranslatedMessage(CustomMessageId.SPREE_END_MSG3, " after ");
		addTranslatedMessage(CustomMessageId.SPREE_END_MSG4, " uninterrupted murders !");
		addTranslatedMessage(CustomMessageId.SPREE_MONSTER_MSG, "a monster");
	}
}